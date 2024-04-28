<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\moveratingController;

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


Route::resource('members', App\Http\Controllers\memberController::class);

Route::get('/customers/new', 'App\Http\Controllers\CustomerController@new');
Route::post('/customers/create', 'App\Http\Controllers\CustomerController@create')->name('customers.create');
Route::get('/customers/edit/{id}', 'App\Http\Controllers\CustomerController@edit');
Route::post('/customers/update', 'App\Http\Controllers\CustomerController@update');


Route::resource('bookings', App\Http\Controllers\bookingController::class);


Route::resource('movies', App\Http\Controllers\movieController::class);


Route::get('/members/new', 'App\Http\Controllers\MemberController@new');
Route::post('/members/create', 'App\Http\Controllers\MemberController@create')->name('members.create');

Route::get('/calendar/display', 'App\Http\Controllers\CalendarController@display')->name('calendar.display');

Route::get('/calendar/json', 'App\Http\Controllers\CalendarController@json')->name('calendar.json');




Route::resource('movieratings', App\Http\Controllers\movieratingController::class);

Route::get('/movieratings/ratemovie/{movie}', 'App\Http\Controllers\movieratingController@ratemovie')->name('movieratings.ratemovie');

