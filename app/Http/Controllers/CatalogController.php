<?php

namespace App\Http\Controllers;

use App\Models\Movie; // Importar modelo
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function getIndex()
    {
        // Obtenemos todas las películas de la DB
        $peliculas = Movie::all();
        return view('catalog.index', ['arrayPeliculas' => $peliculas]);
    }

    public function getShow($id)
    {
        // Buscamos por ID o lanzamos error 404 si no existe
        $pelicula = Movie::findOrFail($id);
        return view('catalog.show', ['pelicula' => $pelicula]);
    }

    public function getEdit($id)
    {
        $pelicula = Movie::findOrFail($id);
        return view('catalog.edit', ['pelicula' => $pelicula]);
    }
    
    // El método getCreate no cambia por ahora
}