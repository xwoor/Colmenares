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
Route::get('quienes-somos', 'UserController@pagina1');
Route::get('servicios', 'UserController@pagina2');
Route::get('publicaciones', 'UserController@pagina3');
Route::get('contacto', 'UserController@pagina4');
Route::get('publicacion/{slug}','UserController@post')->name('post');

Auth::routes();
Route::resource('admin', 'RestController');
Route::get('agregar','RestController@create');
Route::post('mail','UserController@mail');