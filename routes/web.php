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

Route::get('/', 'LoginController@index');
Route::post('/', 'LoginController@login');

Route::get('/signup', 'SignupController@index');
Route::post('/signup', 'SignupController@signup');


Route::get('/winelist', 'WineController@index')->middleware('protected');

Route::get('/logout', 'LoginController@logout');

Route::get('/user', function() {
    return Auth::user();
});

Route::get('/winelist/results', 'WineController@search');

