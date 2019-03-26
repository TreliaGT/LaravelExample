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

Route::get('/' , 'Pages@index');
Route::get('/about', 'Pages@about');
Route::get('/contact', 'Pages@contact');


Route::get('/manufacturers', 'ManufacturersController@index');
Route::get('/manufacturers/{manufacturers}', 'ManufacturersController@show');

Route::get('/games' , 'GameController.php@index');
Route::get('games/{game}', 'GameController.php@show');