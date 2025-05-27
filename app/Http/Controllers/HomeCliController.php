<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeCliController extends Controller
{
    public function index(){
        return view('home-cli');
    }
}
