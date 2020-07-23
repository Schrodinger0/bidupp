<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Auctioneer;
use Illuminate\Support\Facades\Redirect;

class AuctioneerController extends Controller
{
    public function index()
    {
        return view('auctioneer');
    }

    public function save( Request $req){
   
       // print_r($req->input());

       $auctioneer = new Auctioneer;
       $auctioneer->Name = $req->Name;
       $auctioneer->email = $req->email;
       $auctioneer->EntreprisePos = $req->EntreprisePos;
       $auctioneer->EntrepriseNom = $req->EntrepriseNom;
       $auctioneer->SiteWeb = $req->SiteWeb;
       $auctioneer->phone = $req->phone;
       $auctioneer->AdrFis = $req->AdrFis;
       $auctioneer->AdrMat = $req->AdrMat;
       $auctioneer->description = $req->description;
       $auctioneer->save();
       return redirect::back()->with('success', 'Your Request is being processed! we\'ll inform  you of any updates');


    }
}
