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

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function() {
	return view('home');
})->name('home');

Route::get('/guest/rsvp', 'GuestController@rsvp')->name('guest.rsvp');

Route::get('/guest/rsvp2', 'GuestController@rsvp2')->name('guest.rsvp2');

Route::get('/guest', 'GuestController@index')->name('guest.index');

//User routes
Auth::routes();


/* list to do
| Implement email reminder
| Implement transferring money to bank account?
*/

