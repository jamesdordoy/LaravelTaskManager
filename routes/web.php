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

Route::auth();

Route::get("/", 'TaskController@home');

Route::get("/contact", 'ContactController@index');


Route::get("/add", 'TaskController@create');
Route::post("/add", "TaskController@store");

Route::get("/edit/{id}", 'TaskController@edit');
Route::post("/edit/{id}", "TaskController@update");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
