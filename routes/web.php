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

Route::get('/bodyspa', 'BodyspaController@index');
Route::post('/bodyspa/store', 'BodyspaController@store');
Route::get('/bodyspa/{id}/edit', 'BodyspaController@edit');
Route::post('/bodyspa/{id}/update', 'BodyspaController@update');
Route::get('/bodyspa/{id}/delete', 'BodyspaController@delete');

Route::resource('haircut','HaircutController');
Route::post('/haircut/store', 'HaircutController@store');
Route::get('/haircut/{id}/edit', 'HaircutController@edit');
Route::post('/haircut/{id}/update', 'HaircutController@update');
Route::get('/haircut/{id}/delete', 'HaircutController@delete');

Route::get('/paketcantik', 'PaketcantikController@index');
Route::post('/paketcantik/store', 'PaketcantikController@store');
Route::get('/paketcantik/{id}/edit', 'paketcantikController@edit');
Route::post('/paketcantik/{id}/update', 'paketcantikController@update');
Route::get('/paketcantik/{id}/delete', 'paketcantikController@delete');

Route::get('/legsarea', 'LegsareaController@index');
Route::post('/legsarea/store', 'LegsareaController@store');
Route::get('/legsarea/{id}/edit', 'LegsareaController@edit');
Route::post('/legsarea/{id}/update', 'LegsareaController@update');
Route::get('/legsarea/{id}/delete', 'LegsareaController@delete');

Route::get('/facialarea', 'FacialareaController@index');
Route::post('/facialarea/store', 'FacialareaController@store');
Route::get('/facialarea/{id}/edit', 'FacialareaController@edit');
Route::post('/facialarea/{id}/update', 'FacialareaController@update');
Route::get('/facialarea/{id}/delete', 'FacialareaController@delete');