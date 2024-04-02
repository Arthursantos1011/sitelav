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

Route::get('/cursos', function () {
    return view('cursos');
});

Route::get('/departamentos', function () {
    return view('departamentos');
});

Route::get('/oportunidades', function () {
    return view('oportunidades');
});

Route::get('/vestibulinho', function () {
    return view('vestibulinho');
});

Route::get('/instituicao', function () {
    return view('instituicao');
});

Route::get('/contato', function () {
    return view('contato');
});