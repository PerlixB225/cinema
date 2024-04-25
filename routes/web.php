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


Route::resource('customers', App\Http\Controllers\customersController::class);


Route::resource('movies', App\Http\Controllers\moviesController::class);


Route::resource('screenings', App\Http\Controllers\screeningsController::class);


Route::resource('tickets', App\Http\Controllers\ticketsController::class);
