<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Ville; 
class VilleController extends Controller
{

  /*  public function show($id)
    {
        $products = Product::with('villes')->whereHas('villes', function ($query) use($id) {
            $query->where('id', $id);
        })->orderBy('created_at', 'DESC')->paginate(8);
        return view('products.ville')->with('products', $products);

    }

    public function Monastir()
    {
    $villes = Ville::all();
    $products = Product::where('ville', "monastir")->take(12)->get();
    return View('villes.Monastir')->with('products', $products);

    }
   */
}
