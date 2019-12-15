<?php

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
    return view('index');
});
Route::get('/bodyspa', function () {
    return view('bodyspa');
});
Route::get('/haircut', function () {
    return view('haircut');
});
Route::get('/paketcantik', function () {
    return view('paketcantik');
});