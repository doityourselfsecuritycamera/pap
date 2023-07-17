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

Route::get('/script-1', function () {
    return view('script-1');
});

Route::get('/script-2', function () {
    return view('script-2');
});

Route::get('/script-3', function () {
    return view('script-3');
});

Route::get('/script-infra1', function () {
    return view('script-infra1');
});

Route::get('/script-infra2', function () {
    return view('script-infra2');
});

Route::get('/script-infra3', function () {
    return view('script-infra3');
});


Route::get('/script-det1', function () {
    return view('script-det1');
});

Route::get('/script-det2', function () {
    return view('script-det2');
});

Route::get('/script-det3', function () {
    return view('script-det3');
});

Route::get('/cam-online', function () {
    return view('conteudo4');
});

Route::get('/script-cam-online', function () {
    return view('script-cam-online');
});

Route::get('/script-cam-online_mat', function () {
    return view('script-cam-online_mat');
});

Route::get('/script-cam-online_sc', function () {
    return view('script-cam-online_sc');
});

Route::get('/cam-mov-mat', function () {
    return view('cam-mov-mat');
});
