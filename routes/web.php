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

Route::get('/test', 'ItemController@update');

// Home Page
Route::get('/', 'ItemController@index');

//Search Page
Route::get('/search', 'ItemController@search');

//History Page
Route::group(['prefix' => 'history'], function() {
    Route::get('{name}', 'HistoryController@index');
    Route::post('{name}/edit', 'HistoryController@edit');
});

// Staff Page
Route::get('/staff', 'ProfileController@staff');

//About Us Page
Route::get('/about', function () {
    return view('public.about');
});

// Profile Pages
Route::group(['prefix' => 'user'], function() {
    Route::get('{name}', 'ProfileController@index');
});

// Edit Profile
Route::group(['middleware' => 'editprofile', 'prefix' => 'profile'], function() {
    Route::get('/edit', 'ProfileController@edit');
    Route::post('/edit', 'ProfileController@update');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
