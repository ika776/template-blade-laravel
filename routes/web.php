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
    return view('welcome');
});
Route::get('/master',function(){
    return view('adminlte.master');
});
Route::get('/table', function(){
    return view('item.index');
});
Route::get('/data-table', function(){
    return view('item.datatabel');
});
Route::get('/cast','CastController@index');
Route::get('/castcreate','CastController@create');
Route::post('/cast','CastController@store');
Route::get('/cast/{cast_id}','CastController@show');
Route::get('/cast/{cast_id}/edit','CastController@edit');
Route::put('/cast/{cast_id}','CastController@update');
Route::delete('/cast/{cast_id}','CastController@destroy');


Route::get('/film/create','FilmController@create');