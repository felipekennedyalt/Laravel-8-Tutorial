<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        $names = ['Jhon', 'michael', 'david', 'jessica'];
        return view('about', ['names' => $names]);
    }
}
