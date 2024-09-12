<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/clientes', [ClienteController::class, 'index']);
Route::controller(ClienteController::class)->group(function(){
    Route::get('/clientes', 'index');
    Route::get('/clientes/crear', 'create');
    Route::post('/clientes/create', 'store');
    Route::get('/clientes/show/{id}', 'show');
    Route::get('/clientes/edit/{id}', 'edit');
    Route::put('/clientes/update/{id}', 'update');
    Route::delete('/clientes/eliminar/{id}', 'destroy');
});