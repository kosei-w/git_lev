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
<<<<<<< HEAD

Route::get('/', 'PostController@index');
=======
Route::get('/', 'PostController@index');
Route::get('/posts/{post}', 'PostController@show');
>>>>>>> c1fa252 ([add]記事詳細画面)
