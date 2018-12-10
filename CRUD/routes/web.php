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

Route::get('/', 'PostController@index');

Route::get('/post/create', 'PostController@create');

Route::post('/post', 'PostController@store');

Route::get('/post/{title}', 'PostController@show');

Route::get('/post/{title}/edit', 'PostController@edit');

Route::put('/post/{title}', 'PostController@update');

Route::delete('/post/{title}', 'PostController@destroy');
// Route::options('/', function () { //Not need it
//     return 'Your Here!';
// });
