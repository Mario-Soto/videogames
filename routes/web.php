<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::get('/', 'InicioController@index')->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/videogames', 'VideogameController@index')->name('videogames.index');
Route::get('/videogames/create', 'VideogameController@create')->name('videogames.create');
Route::post('/videogames', 'VideogameController@store')->name('videogames.store');
Route::get('/videogames/{videogame}', 'VideogameController@show')->name('videogames.show');
Route::get('/videogames/{videogame}/edit', 'VideogameController@edit')->name('videogames.edit');
Route::put('/videogames/{videogame}', 'VideogameController@update')->name('videogames.update');
Route::delete('/videogames/{videogame}', 'VideogameController@destroy')->name('videogames.destroy');