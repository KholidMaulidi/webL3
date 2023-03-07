<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function food(){
        return view('food');
    }

    public function drink(){
        return view('drink');
    }
}
