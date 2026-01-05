<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index(Request $request)
    {
        if ($request->user()->usertype == 'admin') {
            return view('dashboard');
        }
        else {
            return redirect()->route('home');
        }
        
    }

    public function home(Request $request){
        if($request->user()->usertype == 'user'){
           return view('welcome');  
        }
        else{
            return redirect()->route('dashboard');
        }

    }
}
