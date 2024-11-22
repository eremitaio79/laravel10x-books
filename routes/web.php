<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// My routes.
// Teste1.
Route::get('/test.index', function() {
    return view('tests.index');
})->name('hh');

// Teste2.
Route::get('/test.bola', function() {
    return view('tests.bola');
})->name('bolabola');

// Rota do tipo any: aceita qualquer tipo de verbo http na rota.
Route::any('/any', function() {
    // return view('tests.bola');
    return 'Anything!!!';
});

// Rota do tipo match: neste tipo é obrigatório informar quais os verbos https são permitidos.
Route::match(['get', 'post'], '/match', function() {
    return 'Match route!!!';
});
