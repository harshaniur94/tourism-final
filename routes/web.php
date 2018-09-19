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
Route::resource('/transport','TransportController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/edit' ,'HomeController@edit');


Route::get('/welcome', function () {
    return view('welcome');
});




Route::get('/whales',function(){
    return view('whales');
});



Route::post('hotels',['uses'=>'HotelController@RegisterHotel',
'as' =>'signup']);
