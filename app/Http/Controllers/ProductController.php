<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::inRandomOrder()->take(12)->get();
        return view('products.index')->with('products', $products);
    }
    public function activite()
    {
        $products = Product::where('categorie', "Activite")->take(12)->get();
        return view('products.activite')->with('products', $products);
    }
    
    public function beaute()
    {
        $products = Product::where('categorie', "Beaute")->take(12)->get();
        return view('products.beaute')->with('products', $products);
    }
    public function formation()
    {
        $products = Product::where('categorie', "Formation")->take(12)->get();
        return view('products.formation')->with('products', $products);
    }
    public function gastronomie()
    {
        $products = Product::where('categorie', "Gastronomie")->take(12)->get();
        return view('products.gastronomie')->with('products', $products);
    }
    public function hotel()
    {
        $products = Product::where('categorie', "Hotel")->take(12)->get();

        return view('products.hotel')->with('products', $products);
    }
     public function sport()
    {
        $products = Product::where('categorie', "Sport")->take(12)->get();
        return view('products.sport')->with('products', $products);
    }
    public function shopping()
    {
        $products = Product::where('categorie', "Shopping")->take(12)->get();
        return view('products.shopping')->with('products', $products);
    }

    //Show Using location from map 
    public function ville()
    {
        return view('products.ville');
    }

    

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        return view('products.show')->with('product', $product);
    }
}
