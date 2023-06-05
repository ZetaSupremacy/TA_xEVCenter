<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Mail;
use App\Mail\sendMail;
use Illuminate\Http\Request;

class emailController extends Controller
{
    public function emailVerifikasi(){
        $mail = [
            'title' => 'test',
            'body' => 'test2'
        ];

        Mail::to('mrafimuli35@gmail.com')->send(new sendMail($mail));

        dd('test');  
    }
}
