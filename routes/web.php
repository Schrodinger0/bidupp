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
Route::get('/ville/{id}', 'VilleController@show')->name('ville.show');
Route::get('/tout/{slug}', 'ProductController@show')->name('products.show');
Route::get('/search', 'ProductController@search')->name('products.search');

 /*ville search route

*/

/* Enchers Route */

Route::get('/mesenchers', 'CartController@index')->name('cart.index');

/*crud enchers*/


Route::group(['middleware' => ['auth']], function () {

    Route::post('/mesenchers/ajouter', 'CartController@store')->name('cart.store');
    Route::delete('/mesenchers/{rowId}', 'CartController@destroy')->name('cart.destroy');

    /*Invoice */
    Route::get('/mesenchers/facture', 'CheckoutController@invoice')->name('cart.invoice');

    Route::post('/mesenchers/confirm', 'CheckoutController@store')->name('Checkout.store');

});




Route::get('/videenchers', function () {
    Cart::destroy();
});





Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/* newsletter */

Route::post('/newsletter','NewsletterController@storeMail')->name('newsletter.save');;
