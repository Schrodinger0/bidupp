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


Route::get('/', 'Controller@welcome')->name('welcome');

Route::get('/tout', 'ProductController@index')->name('products.index');
Route::get('/activite', 'ProductController@activite')->name('products.activite');
Route::get('/beaute', 'ProductController@beaute')->name('products.beaute');
Route::get('/formation', 'ProductController@formation')->name('products.formation');
Route::get('/gastronomie', 'ProductController@gastronomie')->name('products.gastronomie');
Route::get('/hotel', 'ProductController@hotel')->name('products.hotel');
Route::get('/sport', 'ProductController@sport')->name('products.sport');
Route::get('/shopping', 'ProductController@shopping')->name('products.shopping');
Route::get('/ville', 'ProductController@ville')->name('products.ville');
Route::get('/tout/{slug}', 'ProductController@show')->name('products.show');

 /*ville search route

 Route::get('/ville/{ville}', 'VilleController@show')->name('ville.show');
*/ 

/* Enchers Route */ 

Route::get('/mesenchers', 'CartController@index')->name('cart.index');


Route::post('/mesenchers/ajouter', 'CartController@store')->name('cart.store');

Route::get('/videenchers', function () {
    Cart::destroy();
});
