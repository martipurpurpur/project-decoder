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

Route::get('/', function() {
    return view('index');
})->name('index');

Route::get('/rot', function() {
    return view('rot');
})->name('index_rot');
Route::post('/rot', 'DecoderController@rotate')->name('rot');

Route::get('/uue', function() {
    return view('uue');
})->name('index_uue');
Route::post('/uue', 'DecoderController@uue')->name('uue');


Route::get('/base64', function() {
    return view('base64');
})->name('index_base64');
Route::post('/base64', 'DecoderController@base64')->name('base64');



