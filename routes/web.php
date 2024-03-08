<?php
use App\Http\Controllers\MangasController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes(['verify' => true]);

// Rutas que no requieren verificación de correo electrónico
Route::view('/', 'auth.login')->name('login');
Route::post('/', [UsuariosController::class, 'authenticationLogin'])->name('login.post');
Route::get('/register', [UsuariosController::class, 'create'])->name('register');
Route::post('/register', [UsuariosController::class, 'store'])->name('register.post');

// Rutas que requieren verificación de correo electrónico
Route::middleware(['verified'])->group(function () {
    Route::resource("usuarios", UsuariosController::class);
    Route::resource("mangas", MangasController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
