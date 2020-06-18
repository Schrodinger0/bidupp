<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class ProductController extends Controller
{
    public function index()
    {

        $products = Product::with('categories')->paginate(12);
        return view('products.index')->with('products', $products);
    }
    public function activite()
    {
        $products = Product::with('categories')->whereHas('categories', function ($query) {
            $query->where('slug', "Activite");
        })->paginate(8);
        return view('products.activite')->with('products', $products);
    }
    
    public function beaute()
    {
        $products = Product::with('categories')->whereHas('categories', function ($query) {
            $query->where('slug', "Beaute");
        })->paginate(8);
        return view('products.beaute')->with('products', $products);
    }
    public function formation()
    {
        $products = Product::with('categories')->whereHas('categories', function ($query) {
            $query->where('slug', "Formation");
        })->paginate(8);
        return view('products.formation')->with('products', $products);
    }
    public function gastronomie()
    {
        $products = Product::with('categories')->whereHas('categories', function ($query) {
            $query->where('slug', "Gastronomie");
        })->paginate(8);
        return view('products.gastronomie')->with('products', $products);
    }
    public function hotel()
    {
        $products = Product::with('categories')->whereHas('categories', function ($query) {
            $query->where('slug', "Hotel");
        })->paginate(8);
        return view('products.hotel')->with('products', $products);
    }
     public function sport()
    {
        $products = Product::with('categories')->whereHas('categories', function ($query) {
            $query->where('slug', "Sport");
        })->paginate(8);
        return view('products.sport')->with('products', $products);
    }
    public function shopping()
    {
        $products = Product::with('categories')->whereHas('categories', function ($query) {
            $query->where('slug', "Shopping");
        })->paginate(8);
        return view('products.shopping')->with('products', $products);
    }

    //Show Using location from map 
    public function ville()
    {
        $products = Product::inRandomOrder()->take(12)->get();
        return view('products.ville')->with('products', $products);;
    }

    

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        return view('products.show')->with('product', $product);
    }
}
