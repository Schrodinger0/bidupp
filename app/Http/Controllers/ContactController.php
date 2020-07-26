<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    
    public function SendMail( Request $req){
   dd('7aja');
        dd($req->email);
     //  Mail::to("admin@admin.com")->send(new ContactForm);
     Mail::send('emails.contact', ['candidates' => $name, 'sender' => $sender], function ($message) use ($destinations, $user) {
        $message->to("admin@admin.com")->subject('Complaint');
        $message->from($req->email, 'Your Application');
    });
       return redirect('/');
    }

}
