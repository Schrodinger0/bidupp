<?php

namespace App\Http\Controllers;

use App\Ville;
use Illuminate\Http\Request;
use App\Product;
use App\Cart;


class ProductController extends Controller
{
    public function index()
    {

        $products = Product::with('categories')->orderBy('created_at', 'DESC')->paginate(12);
        return view('products.index')->with('products', $products);
    }
    public function activite()
    {
        $products = Product::with('categories')->whereHas('categories', function ($query) {
            $query->where('slug', "Activite");
        })->orderBy('created_at', 'DESC')->paginate(8);
        return view('products.activite')->with('products', $products);
    }

    public function beaute()
    {
        $products = Product::with('categories')->whereHas('categories', function ($query) {
            $query->where('slug', "Beaute");
        })->orderBy('created_at', 'DESC')->paginate(8);
        return view('products.beaute')->with('products', $products);
    }
    public function formation()
    {
        $products = Product::with('categories')->whereHas('categories', function ($query) {
            $query->where('slug', "Formation");
        })->orderBy('created_at', 'DESC')->paginate(8);
        return view('products.formation')->with('products', $products);
    }
    public function gastronomie()
    {
        $products = Product::with('categories')->whereHas('categories', function ($query) {
            $query->where('slug', "Gastronomie");
        })->orderBy('created_at', 'DESC')->paginate(8);
        return view('products.gastronomie')->with('products', $products);
    }
    public function hotel()
    {
        $products = Product::with('categories')->whereHas('categories', function ($query) {
            $query->where('slug', "Hotel");
        })->orderBy('created_at', 'DESC')->paginate(8);
        return view('products.hotel')->with('products', $products);
    }
     public function sport()
    {
        $products = Product::with('categories')->whereHas('categories', function ($query) {
            $query->where('slug', "Sport");
        })->orderBy('created_at', 'DESC')->paginate(8);
        return view('products.sport')->with('products', $products);
    }
    public function shopping()
    {
        $products = Product::with('categories')->whereHas('categories', function ($query) {
            $query->where('slug', "Shopping");
        })->orderBy('created_at', 'DESC')->paginate(8);
        return view('products.shopping')->with('products', $products);
    }

    //Show Using location from map
    public function ville()
    {
        $villes = Ville::all();
        $products = Product::inRandomOrder()->take(12)->get();
        return view('products.ville')->with(compact('villes', 'products'));
    }



  
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        //$cart = Cart::all();
         $cart = Cart::where('slug', $slug)->get();
        //return view('products.show')->with('product', $product);

         return view('products.show',['product'=> $product,'cart'=>$cart]);
    }
  



    public function search()
    {
        request()->validate([
            'q' => 'required|min:3'
        ]);

        $q = request()->input('q');

        $products = Product::where('title', 'like', "%$q%")
                ->orWhere('description', 'like', "%$q%")
                ->paginate(6);

        return view('products.search')->with('products', $products);
    }
}
