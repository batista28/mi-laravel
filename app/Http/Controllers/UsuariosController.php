<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;


class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = Users::all();
        return view('usuarios.index')->with("usuarios", $usuarios);
    }

    /**
     * Guarda en BD los datos del formulario de registro de discotecas
     * y despues redirecciona a el indice
     */
    public function store(Request $request)
    {
        //Validamos los datos
        $request->validate([
            'name' => 'required|max:70|min:5',
            'email' => 'required',
            'password' => 'required',
        ]);

        //Guardamos en bd los datos
        Users::create($request->all());

        //Redireccionamos a la vista
        return redirect()->route('usuarios.index')->with('success', 'usuario creado correctamente');
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function edit($id)
    {
        $usuario = Users::find($id);


        return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Sacamos los datos de un usuario con el id que nos dan
        $usuario = Users::find($id);

        return view('usuarios.show', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Validamos los datos
        $request->validate([
            'name' => 'required|max:70|min:5',
            'email' => 'required',
        ]);

        //Cargamos la discoteca a modificar
        $usuarios = Users::find($id);

        //modificamos los datos en bd
        $usuarios->update($request->all());

        return redirect()->route('usuarios.index')
            ->with('success', 'Modificación realizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuarios = Users::find($id);

        $usuarios->delete();

        return redirect()->route('usuarios.index')
            ->with('success', 'usuario borrado');
    }

    public function authenticationLogin(Request $request)
    {
        $datosLogin = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        if (auth()->attempt($datosLogin)) {
            $request->session()->regenerate();
            return redirect('/mangas');
        }
        return back();
    }
    public function login(Request $request)
    {
        return view('login');
    }
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return back();
    }
}