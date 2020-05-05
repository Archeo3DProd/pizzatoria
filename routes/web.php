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
Route::post('/', 'HomeController@home')->name('home');
Route::get('/composer', 'IngredientsController@composer')->name('composer');
Route::get('/contact', 'HomeController@contact')->name('contact');

// Panier
Route::get('/panier', 'PanierController@index');
Route::post('/panier', 'PanierController@store')->name('panier');
Route::get('/panier/{pizza}', 'PanierController@effacer')->name('panier.effacer');