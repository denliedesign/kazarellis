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

Route::get('okoboji', function () {
    return view('okoboji.index');
});

Route::get('okoboji/events', function () {
    return view('okoboji.events');
});

Route::get('okoboji/contact', function () {
    return view('okoboji.contact');
});

//Route::get('spencer', function () {
//    return view('spencer.index');
//});

//Route::get('spencer/events', function () {
//    return view('spencer.events');
//});

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('okoboji/menu', 'MenuController');
//Route::resource('spencer/spencermenu', 'SpencermenuController');
Route::resource('dinings', 'DiningController');
//Route::resource('spencerdinings', 'SpencerdiningController');
Route::resource('photos', 'PhotoController');
//Route::resource('spencerphotos', 'SpencerphotoController');

