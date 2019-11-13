<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class WilayahController extends Controller
{
    
    //
    public function wilayahlist(){
        return view("pages.wilayah.list");
    }
    public function wilayahform(){
        return view("pages.wilayah.form");
    }
}

