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


//Routes For User
Route::get('/','UserController@index')->name('users.index');
Route::get('/users/create','UserController@create')->name('users.create');
Route::get('/users/excelExport','UserController@excelExport')->name('users.excelExport');
Route::post('/users','UserController@store')->name('users.store');
Route::get('/users/{user}','UserController@edit')->name('users.edit');
Route::post('/users/{user}','UserController@update')->name('users.update');
Route::delete('/users/{user}','UserController@destroy')->name('users.destroy');
