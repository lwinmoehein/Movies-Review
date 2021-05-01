<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\SeriesController;
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

Route::get('/','MovieController@index');
Route::resource('movie', 'MovieController');
Route::get('movies/destroy/{movie}','MovieController@destroy')->name('movies.destroy');

Route::resource('serie','SeriesController');
Route::get('series/destroy/{serie}','SeriesController@destroy')->name('series.destroy');

Route::resource('tag','TagController');
