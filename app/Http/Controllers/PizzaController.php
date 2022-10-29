<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function about() {
        return view('about');
    }
    
    public function read1() {
        return view('more1');
    }

    public function read2() {
        return view('more2');
    }

    public function read3() {
        return view('more3');
    }
}
