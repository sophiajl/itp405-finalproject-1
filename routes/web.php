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

use App\Wine;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/winelist', 'WineController@index');

<<<<<<< HEAD
Route::get('/winelist/results', 'WineController@search');
=======
>>>>>>> c637cd9609ef4dc7cf036786487948b0890a97ac
