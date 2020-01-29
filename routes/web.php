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


Route::get('/','PagesController@home');
Route::get('/about','PagesController@about');

Route::get ('/mahasiswa','MahasiswaController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get ('/students','StudentsController@index');
Route::get ('/students/create','StudentsController@create');
Route::get ('/students/{student}','StudentsController@show');
Route::post ('/students','StudentsController@store');