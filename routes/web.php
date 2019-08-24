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
Route::post('/send_user','UserController@send');
Route::get('/read_user','UserController@read');
Route::get('/delete_user/{id}','UserController@delete');
Route::get('/edit_user/{id}','UserController@edit');
Route::post('/update_user/{id}','UserController@update');
