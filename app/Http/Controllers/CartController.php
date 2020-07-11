<?php

namespace App\Http\Controllers;
use App\Cart;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = Cart::all();
        return view ('products.show')->with('cart',$cart); 
    }

    
  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prod_id=$request->input('id');
        $maxValue = Cart::where('product_id',$prod_id)->max('amount');
        $amount=$request->input('mont');
        $cart = new Cart;
        $cart->user_id=auth()->user()->id;
        $cart->user_name=auth()->user()->name;
        $cart->product_id = $prod_id;
        $cart->product_title = $request->input('title');
        $cart->slug=$request->input('slug');
        $cart->bid_time=Carbon::now();
        $cart->amount =$amount+$maxValue; 
        $cart->save();
        return redirect::back()->with('success', 'bid added');
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($rowId)
    {
        Cart::remove($rowId);

        return back()->with('success', 'Le produit a été supprimé.');
    }


  
}
