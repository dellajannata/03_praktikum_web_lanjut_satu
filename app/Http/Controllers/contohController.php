<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contohController extends Controller{
    public function halo_1(){
    return view('layouts.contoh')
            ->with('nama','Della');
    }
}
