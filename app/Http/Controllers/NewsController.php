<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news_1(){
        return view('layouts.news')
                ->with('news1','Berita Terkini');
    }

    public function news_2($title){
        return view('layouts.news')
                ->with('news1', $title);
    }
}
