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

// Register 
Route::get('/register', 'Auth\RegisterController@index');
Route::post('/register', 'Auth\RegisterController@create');

// Login
Route::get('/login', 'Auth\LoginController@index')->name('login');
Route::post('/login', 'Auth\LoginController@store');

// Logout
Route::post('/logout', 'Auth\LoginController@logout');

// Route for Banner
Route::get('/', 'BannerController@index'); //Front end display

Route::get('/admin/banner', 'BannerController@show');
Route::get('/admin/banner/update/{id}', 'BannerController@edit');
Route::put('/admin/banner/update/{id}', 'BannerController@update');



// Go to main index after login
Route::get('/admin', function(){
    return view('admin.index');
})->middleware('auth');