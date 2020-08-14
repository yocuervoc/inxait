<?php

use Illuminate\Support\Facades\Route;
use App\client;
use App\Winner;
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

Route::resource('/','ClientController');
Route::resource('/inscripcion', 'ClientController');
Route::resource('/seleccionar_ganador', 'WinnerController');
Route::get('/reporte', 'UsersController@export');
