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
    return view('index');
});

Route::get('/conteudo1', function () {
    return view('conteudo1');
});

Route::get('/conteudo2', function () {
    return view('conteudo2');
});

Route::get('/conteudo3', function () {
    return view('conteudo3');
});

Route::get('/conteudo4', function () {
    return view('conteudo4');
});