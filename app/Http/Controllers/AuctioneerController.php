<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Auctioneer;

class AuctioneerController extends Controller
{
    public function index()
    {
        return view('auctioneer');
    }

    public function store( Request $req){
   
        print_r($req->input());
//$auctioneer = new Auctioneer;
     //   $mail->email = $req->email;
//$mail->save();
      //  return redirect('/');
    }
}
