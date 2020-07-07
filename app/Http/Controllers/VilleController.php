<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class VilleController extends Controller
{

    public function show($id)
    {
        $products = Product::with('villes')->whereHas('villes', function ($query) use($id) {
            $query->where('id', $id);
        })->orderBy('created_at', 'DESC')->paginate(8);
        return view('products.ville')->with('products', $products);

    }
}
