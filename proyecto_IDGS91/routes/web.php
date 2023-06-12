<?php

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


Route::get('/', function () {
    return view('Index');
})->name('index');

Route::get('/universidades', function () {
    return view('Universidades');
})->name('universidades');

Route::get('/locales', 'App\Http\Controllers\LocalesController@index')->name('locales');
Route::get('/altas', 'App\Http\Controllers\LocalesController@create')->name('locales.create');
Route::post('locales', 'App\Http\Controllers\LocalesController@store')->name('locales.store');

Route::get('/puntos de interes', function () {
    return view('Puntos de interes');
})->name('puentos de interes');

Route::get('/login', 'App\Http\Controllers\LoginController')->name('login');

Route::post('login', 'App\Http\Controllers\MensajeController@store');

