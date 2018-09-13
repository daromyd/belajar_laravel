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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/sambung_ilmu','SambungilmuController@awal');
Route::get('/sambung_ilmu/create','SambungilmuController@create')->name('create_form');
Route::post('/sambung_ilmu/add','SambungilmuController@add')->name('add_mahasiswa');
