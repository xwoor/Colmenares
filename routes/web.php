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

Route::get('/', 'UserController@index');
Route::get('/pagina1', 'UserController@pagina1');
Route::get('/pagina2', 'UserController@pagina2');
Route::get('/pagina3', 'UserController@pagina3');
Route::get('/pagina4', 'UserController@pagina4');

Auth::routes();
Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/section1', 'HomeController@section1')->name('section1');