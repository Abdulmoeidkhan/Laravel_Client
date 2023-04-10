<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignUpController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            return redirect('newEvent');
        }
        else{
            
            return view('signUp', ["user" => auth()->user()]);
        }
    }
}
