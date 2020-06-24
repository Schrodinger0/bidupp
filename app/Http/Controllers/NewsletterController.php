<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Newsletter;

class NewsletterController extends Controller
{ 
    public function storemail( Request $req){
   
        $mail = new Newsletter;
        $mail->email = $req->email;
        $mail->save();
        return redirect('/');
    }
 
}
