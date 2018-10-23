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

Route::get('/', 'PagesController@index');
Route::resource('/boats','BoatsController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/edit' ,'HomeController@edit');
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/whales',function(){
    return view('whales');
});
Route::get('/dashboardboat',function(){
    return view('users.boatowner');
});
Route::get('/dashboardadmin', function(){
   return view('boatownerfunctions.index');
});
Route::post('/boatregistration','BoatsController@store');
Route::get('/createboat',function(){
    return view('boatownerfunctions.addnewboat');
});
Route::get('/deleteboat','BoatsController@deleteboatview');

Route::post('/boatedit','BoatsController@update');
Route::get('/tripscreate','TripController@index');
Route::post('addtrip','TripController@AddNewTrip');
Route::get('/reservation','ReservationController@index');
