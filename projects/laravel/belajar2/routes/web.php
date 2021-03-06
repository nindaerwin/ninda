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

Route::get('/', 'IndexController@home');

Route::get('/form', 'FormController@biodata');
Route::post('/kirim', 'FormController@kirim');

/*
Route::get('/master', function(){
    return view('layout.master');
});
*/

Route::get('/data-table', function(){
    return view('table.data-table');
});

Route::get('/table', function(){
    return view('table.table');
});