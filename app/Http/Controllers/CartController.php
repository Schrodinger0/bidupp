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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        

        // if ($maxValue<$request->input('price')){
        //     $maxValue=$request->input('price');
        // }

        $amount=$request->input('mont');
       
        $cart = new Cart;
        $cart->user_id=auth()->user()->id;
        $cart->user_name=auth()->user()->name;
        $cart->product_id = $prod_id;
        $cart->product_title = $request->input('title');
        $cart->slug=$request->input('slug');
        $cart->bid_time=Carbon::now();
        //$amount=$request->input('price')+$request->input('mont');  
        $cart->amount =$amount; 
        $cart->save();


        // return redirect()->route('products.ind',[$request->input('slug')])->with('success', 'bid added');
        return redirect::back()->with('success', 'bid added');
    }



        // /*change it to the condition of higher price + timer end */ 
        // Cart::add($request->id, $request->title, 1, $request->price)
        // ->associate('App\Product');
        
        // return redirect()->route('products.show',$request->slug)->with('success', 'Votre offre a été miser');

    



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $cart=Cart::find($id);
        // return view ('products.showtab')->with('cart',$cart); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 
  
}
