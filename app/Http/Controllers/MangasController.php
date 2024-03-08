<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reseñas;
use Illuminate\Http\Request;
use App\Models\Mangas;

class MangasController extends Controller
{
    public function index()
    {
        $mangas = Mangas::all();
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
        Mangas::create($request->all());

        //Redireccionamos a la vista
        return redirect()->route('mangas.index')->with('success', 'manga creado correctamente');
    }

    public function create()
    {
        return view('mangas.create');
    }

    public function edit($id)
    {
        $manga = Mangas::find($id);


        return view('mangas.edit', compact('manga'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Sacamos los datos de un manga con el id que nos dan
        $reseñasManga = [];
        $manga = Mangas::find($id);
        $reseñas = Reseñas::all();
        for ($i = 0; $i < count($reseñas); $i++) {
            if ($reseñas[$i]["manga_id"] == $id) {
                $reseñasManga[] = $reseñas[$i];
            }
        }
        return view('mangas.show', compact('manga', 'reseñasManga'));
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
        $mangas = Mangas::find($id);

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
        $mangas = Mangas::find($id);

        $mangas->delete();

        return redirect()->route('mangas.index')
            ->with('success', 'manga borrado');
    }
}
