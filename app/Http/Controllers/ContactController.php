<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $r){
        $data = [
            'first_name' => $r->first_name,
            'last_name' => $r->last_name,
            'email' => $r->email,
            'phone' => $r->phone,
            'message'=>$r->message,
        ];
       Mail::to('wsmoasis@gmail.com')->send(new ContactMail($data));
       return 'thanks for reaching out';
    }

}

