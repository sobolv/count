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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/subtract/{num1}/{num2}', 'CountController@subtract');

Route::get('/add/{num1}/{num2}', 'CountController@add');

Route::get('/multiply/{num1}/{num2}', 'CountController@multiply');

Route::get('/divide/{num1}/{num2}', 'CountController@divide');
Route::post('/post', 'CountController@post');
