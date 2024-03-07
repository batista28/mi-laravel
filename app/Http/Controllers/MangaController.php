<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Manga;

class MangaController extends Controller
{
    public function index()
    {
        $mangas = Manga::all();
        return view('mangas.index')->with("mangas", $mangas);
    }

    /**
     * Guarda en BD los datos del formulario de registro de discotecas
     * y despues redirecciona a el indice
     */
    public function store(Request $request)
    {
        //Validamos los datos
        $request->validate([
            'titulo' => 'required',
            'precio' => 'required',
            'stock' => 'required',
            'imagen' => 'required',
            'genero_id' => 'required',
            'editorial_id' => 'required',
        ]);

        //Guardamos en bd los datos
        Manga::create($request->all());

        //Redireccionamos a la vista
        return redirect()->route('mangas.index')->with('success', 'manga creado correctamente');
    }

    public function create()
    {
        return view('mangas.create');
    }

    public function edit($id)
    {
        $manga = Manga::find($id);


        return view('mangas.edit', compact('manga'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Sacamos los datos de un manga con el id que nos dan
        $manga = Manga::find($id);

        return view('mangas.show', compact('manga'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Validamos los datos
        $request->validate([
            'titulo' => 'required',
            'precio' => 'required',
            'stock' => 'required',
            'imagen' => 'required',
            'genero_id' => 'required',
            'editorial_id' => 'required',

        ]);

        //Cargamos la discoteca a modificar
        $mangas = Manga::find($id);

        //modificamos los datos en bd
        $mangas->update($request->all());

        return redirect()->route('mangas.index')
            ->with('success', 'Modificación realizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mangas = Manga::find($id);

        $mangas->delete();

        return redirect()->route('mangas.index')
            ->with('success', 'manga borrado');
    }
}
