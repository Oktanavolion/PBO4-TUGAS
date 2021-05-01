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


Route::group(['midlleware' => 'checkSession'], function () {
    Route::get('/', 'Homecontroller@index');
    Route::get('/user', 'UserController@index');
    Route::get('/list', 'UserController@list');
    Route::get('/add', 'UserController@tambah');
    Route::get('/edit/{id}', 'UserController@edit');

    Route::post('/simpan', 'UserController@simpan');
    Route::post('/update', 'UserController@update');
});

Route::get('/login', 'Homecontroller@login');
Route::post('/masuk', 'Homecontroller@masuk');
