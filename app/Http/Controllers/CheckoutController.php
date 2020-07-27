<?php

namespace App\Http\Controllers;
use App\Order;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $req)
    {
             // print_r($request->input());
             $order = new Order;
             $order->user_name = $req->user_name;
             $order->user_email = $req->user_email;
             $order->oreginal_price = $req->oreginal_price;
             $order->tax = $req->tax;
             $order->auction_price = $req->auction_price;
             $order->payment_created_at = $req->payment_created_at;
             $order->products = $req->products;
             $order->user_id = $req->user_id;
             $order->amount = $req->amount;
             $order->save();
             return redirect('/empty');      

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function invoice()
    {
        $orders = Order::all();

        if (Cart::count() <= 0 ){
             return redirect()->route('cart.index');
        }
        return view('cart.invoice')->with(compact('orders'));
    }


    

}
