<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    //
    public function ultah(){
        return view('ultah');
    }

    public function ramadhan(){
        return view('ramadhan');
    }
}
