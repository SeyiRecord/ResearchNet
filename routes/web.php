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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('profile/show', 'UserController@show');
Route::get('/profiles/createprofile', 'ProfileController@create');
Route::post('/profiles/createprofile', 'ProfileController@store');
Route::post('userType','UserController@userType')->name('userType');
Route::resource('profiles','ProfileController');

// Route::post('/profileform', 'ProfileController@store');
// Route::resource('researches','ResearchController');
// Route::resource('posts','PostController');
// Route::resource('user','UserController');
// Route::get('/profiles/editprofile', 'ProfileController@create');
