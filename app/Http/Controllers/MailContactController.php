<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailContactController extends Controller
{
    public function sendemail(){
        return view('contact') ;
    }
}
