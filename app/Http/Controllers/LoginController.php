<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /* Function for load login view */
    public function loadLoginView(){
        return view('home');
    }
}
