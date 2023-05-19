<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerAgendamentos;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::post('/addAgendamentos', [controllerAgendamentos::class, 'store']);

Route::get('/consulta', function () { return view('consulta'); });

Route::get('/consultar', [controllerAgendamentos::class, 'consultaragenda']);

Route::get('/editar/{id}', [controllerAgendamentos::class, 'Editar']);

Route::delete('/excluir/{id}', [controllerAgendamentos::class, 'DELETE']);

Route::put('/atualizar/{id}', [controllerAgendamentos::class, 'UPDATE']);


