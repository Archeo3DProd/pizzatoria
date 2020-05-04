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
Route::delete('/panier', 'PanierController@destroy')->name('panier.destroy');
//Route::get('/panier/reset', 'PanierController@reset')->name('panier.reset');
//Route::delete('/panier/{product}', 'PanierController@destroy')->name('panier.destroy');
//Route::post('/panier/{product}/save', 'PanierController@save')->name('panier.save');