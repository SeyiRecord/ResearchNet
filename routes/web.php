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

Route::resource('researches','ResearchController');
Route::resource('posts','PostController');
Route::get('profile/show', 'UserController@show');
Route::resource('profile','ProfileController');
// Route::get('/profiles/editprofile', 'ProfileController@create');
Route::get('/profiles/createprofile', 'ProfileController@create');
Route::post('/profileform', 'ProfileController@store');
// Route::resource('user','UserController');
Route::post('userType','UserController@userType')->name('userType');
