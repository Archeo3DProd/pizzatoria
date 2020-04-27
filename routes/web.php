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

// Main page
Route::get('/', 'HomeController@home')->name('home');
Route::get('/composer', 'HomeController@composer')->name('composer');
Route::get('/contact', 'HomeController@contact')->name('contact');