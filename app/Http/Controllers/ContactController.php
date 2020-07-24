<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    
    public function SendMail( Request $req){
   
       Mail::to("admin@admin.com")->send(new ContactForm);
       return redirect('/');
    }

}
