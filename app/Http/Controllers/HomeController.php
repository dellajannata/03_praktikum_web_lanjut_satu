<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('layouts.home')
                ->with('home1', 'Home');
    }
    
}
