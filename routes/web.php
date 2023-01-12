<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('helloword');
});

Route::get('/firstlink', function () {
    return view('firstlink');
});

Route::get('/secondlink', function () {
    return view('secondlink');
});

Route::get('/thirdlink', function () {
    return view('thirdlink');
});

Route::get('/fourthlink', function () {
    return view('fourthlink');
});
