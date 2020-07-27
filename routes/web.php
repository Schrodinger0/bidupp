<?php

use Illuminate\Support\Facades\Route;
use App\Product;
use App\Ville; 
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


Route::post('/contactform', 'ContactController@SendMail')->name('Contact.send');

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
Route::get('/search', 'ProductController@search')->name('products.search');

 /*Auctioneer search route*/
Route::get('/auctioneer', 'AuctioneerController@index')->name('Auctioneer');
Route::post('/submitauct','AuctioneerController@save')->name('auctioneer.save');



/* Enchers Route */

Route::get('/mesenchers', 'TheCartController@index')->name('cart.index');

/*crud enchers*/


Route::group(['middleware' => ['auth']], function () {

    Route::post('/mesenchers/ajouter', 'CartController@store')->name('cart.store');

    /*Invoice */
    Route::get('/mesenchers/facture', 'CheckoutController@invoice')->name('cart.invoice');

    Route::post('/mesenchers/confirm', 'CheckoutController@store')->name('Checkout.store');

});


/* Cart Page */ 
Route::post('/mesenchers/addItem', 'TheCartController@store')->name('thecart.store');
Route::delete('/mesenchers/{rowId}', 'TheCartController@destroy')->name('cart.destroy');





Route::get('/empty', function () {
    Cart::destroy();
    return redirect()->route('cart.index')->with('degla', 'Your Order is being processed');
});





Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/* newsletter */

Route::post('/newsletter','NewsletterController@storeMail')->name('newsletter.save');


/*try update*/ 
Route::get('/update', function(){
    return View('update'); // Your Blade template name 
});















/* ville */
Route::get('/ville/1', function(){
    $villes = Ville::all();
    $products = Product::where('ville', "Ariana")->take(12)->get();
    return View('villes.Ariana')->with(compact('villes', 'products'));
});
Route::get('/ville/2', function(){
    $villes = Ville::all();
    $products = Product::where('ville', "Jendouba")->take(12)->get();
    return View('villes.Jendouba')->with(compact('villes', 'products'));
});
Route::get('/ville/3', function(){
    $villes = Ville::all();
    $products = Product::where('ville', "Gafsa")->take(12)->get();
    return View('villes.Gafsa')->with(compact('villes', 'products'));
});
Route::get('/ville/4', function(){
    $villes = Ville::all();
    $products = Product::where('ville', "Gabès")->take(12)->get();
    return View('villes.Gabes')->with(compact('villes', 'products'));
});
Route::get('/ville/5', function(){
    $villes = Ville::all();
    $products = Product::where('ville', "Bizerte")->take(12)->get();
    return View('villes.Bizerte')->with(compact('villes', 'products'));
});
Route::get('/ville/6', function(){
    $villes = Ville::all();
    $products = Product::where('ville', "Ben Arous")->take(12)->get();
    return View('villes.BenArous')->with(compact('villes', 'products'));
});
Route::get('/ville/7', function(){
    $villes = Ville::all();
    $products = Product::where('ville', "Béja")->take(12)->get();
    return View('villes.Beja')->with(compact('villes', 'products'));
});
Route::get('/ville/8', function(){
    $villes = Ville::all();
    $products = Product::where('ville', "Kairouan")->take(12)->get();
    return View('villes.Kairouen')->with(compact('villes', 'products'));
});
Route::get('/ville/9', function(){
    $villes = Ville::all();
    $products = Product::where('ville', "Kasserine")->take(12)->get();
    return View('villes.Kasserine')->with(compact('villes', 'products'));
});
Route::get('/ville/10', function(){
    $villes = Ville::all();
    $products = Product::where('ville', "Kébili")->take(12)->get();
    return View('villes.Kebili')->with(compact('villes', 'products'));
});
Route::get('/ville/11', function(){
    $villes = Ville::all();
    $products = Product::where('ville', "Le Kef")->take(12)->get();
    return View('villes.TheKef')->with(compact('villes', 'products'));
});
Route::get('/ville/12', function(){
    $villes = Ville::all();
    $products = Product::where('ville', "Mahdia")->take(12)->get();
    return View('villes.Mahdia')->with(compact('villes', 'products'));
});
Route::get('/ville/13', function(){
    $villes = Ville::all();
    $products = Product::where('ville', "La Manouba")->take(12)->get();
    return View('villes.TheManouba')->with(compact('villes', 'products'));
});
Route::get('/ville/14', function(){
    $villes = Ville::all();
    $products = Product::where('ville', "Médenine")->take(12)->get();
    return View('villes.Medenine')->with(compact('villes', 'products'));
});
Route::get('/ville/15', function(){
    $villes = Ville::all();
    $products = Product::where('ville', "Monastir")->take(12)->get();
    return View('villes.Monastir')->with(compact('villes', 'products'));
});
Route::get('/ville/16', function(){
    $villes = Ville::all();
    $products = Product::where('ville', "Nabeul")->take(12)->get();
    return View('villes.Nabel')->with(compact('villes', 'products'));
});
Route::get('/ville/17', function(){
    $villes = Ville::all();
    $products = Product::where('ville', "Sfax")->take(12)->get();
    return View('villes.Sfax')->with(compact('villes', 'products'));
});
Route::get('/ville/18', function(){
    $villes = Ville::all();
    $products = Product::where('ville', "Sidi Bouzid")->take(12)->get();
    return View('villes.SidiBouzid')->with(compact('villes', 'products'));
});
Route::get('/ville/19', function(){
    $villes = Ville::all();
    $products = Product::where('ville', "Siliana")->take(12)->get();
    return View('villes.Siliana')->with(compact('villes', 'products'));
});
Route::get('/ville/20', function(){
    $villes = Ville::all();
    $products = Product::where('ville', "Sousse")->take(12)->get();
    return View('villes.Sousse')->with(compact('villes', 'products'));
});
Route::get('/ville/21', function(){
    $villes = Ville::all();
    $products = Product::where('ville', "Tataouine")->take(12)->get();
    return View('villes.Tataouine')->with(compact('villes', 'products'));
});
Route::get('/ville/22', function(){
    $villes = Ville::all();
    $products = Product::where('ville', "Tozeur")->take(12)->get();
    return View('villes.Tozeur')->with(compact('villes', 'products'));
});
Route::get('/ville/23', function(){
    $villes = Ville::all();
    $products = Product::where('ville', "Tunis")->take(12)->get();
    return View('villes.Tunis')->with(compact('villes', 'products'));
});
Route::get('/ville/24', function(){
    $villes = Ville::all();
    $products = Product::where('ville', "Zaghouane")->take(12)->get();
    return View('villes.Zaghouane')->with(compact('villes', 'products'));
});
