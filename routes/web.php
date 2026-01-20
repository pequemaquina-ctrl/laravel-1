<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;

// Ruta principal - redirige al catálogo
Route::get('/', [HomeController::class, 'getHome']);

// Rutas de autenticación (comentadas por ahora, las usarás más adelante)
// Route::get('/login', function () {
//     return view('auth.login');
// });
// Route::post('/logout', function () {
//     return redirect('/');
// });

// Rutas del catálogo
Route::get('catalog', [CatalogController::class, 'getIndex']);
Route::get('catalog/show/{id}', [CatalogController::class, 'getShow']);
Route::get('catalog/create', [CatalogController::class, 'getCreate']);
Route::get('catalog/edit/{id}', [CatalogController::class, 'getEdit']);