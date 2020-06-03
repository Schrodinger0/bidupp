<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Product;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function welcome()
    {
        $products = Product::latest()->take(6)->get();
        $prHotel = Product::where('categorie', "Hotel")->take(6)->get();

        return view('welcome')->with('products', $products)
                               ;
    }
}
