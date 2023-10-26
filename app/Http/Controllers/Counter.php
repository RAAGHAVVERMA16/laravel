<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Counter extends Controller
{
    public function index(){
        return view("index");
    }

}
