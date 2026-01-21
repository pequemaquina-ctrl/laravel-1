<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Rutas del Videoclub
|--------------------------------------------------------------------------
*/

// Diapositiva 26: El Home redirige según si está logueado o no
Route::get('/', [HomeController::class, 'getHome']);

// Diapositiva 25: Grupo de rutas protegidas por autenticación
Route::middleware('auth')->group(function () {
    
    // Listado y detalle
    Route::get('/catalog', [CatalogController::class, 'getIndex']);
    Route::get('/catalog/show/{id}', [CatalogController::class, 'getShow']);
    
    // Diapositiva 27: Rutas para añadir películas
    Route::get('/catalog/create', [CatalogController::class, 'getCreate']);
    Route::post('/catalog/create', [CatalogController::class, 'postCreate']); // Para procesar el formulario
    
    // Diapositiva 27: Rutas para editar películas
    Route::get('/catalog/edit/{id}', [CatalogController::class, 'getEdit']);
    Route::put('/catalog/edit/{id}', [CatalogController::class, 'putEdit']); // Para procesar la actualización (PUT)

    // Rutas del perfil (creadas por Breeze)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Ruta opcional del Dashboard de Breeze (puedes borrarla si no la usas)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Carga las rutas de login, registro, logout, etc.
require __DIR__.'/auth.php';
