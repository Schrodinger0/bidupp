<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class VilleController extends Controller
{
    
    public function show($ville)
    {
        
        $product = Product::where('ville', $ville)->take(12)->get();

        return view('products.ville')->with('product', $product);
    }
}
