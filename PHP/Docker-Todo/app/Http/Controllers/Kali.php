<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kali extends Controller
{
    public function sayHello(){
        
        return 'Kali is here';
    }

    public function sayHello2(){
        
        return view('Dashboard.Form.form');
    }

    public function index(){
        
        return view('Log.index');
    }
}
