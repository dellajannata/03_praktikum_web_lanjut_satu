<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about_1(){
        return view('layouts.about')
            ->with('about1','Tentang Kami');
    }
}
