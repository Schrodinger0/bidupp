<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function storeMail(){

        $mail = new Mail();

        $mail->email = request('email');

        $email->save();

        return redirect('/');

    }
}
