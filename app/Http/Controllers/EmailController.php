<?php

namespace App\Http\Controllers;
use App\Emailist;

use Illuminate\Http\Request;

class EmailController extends Controller
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

    public function store(Request $request) {
        // $emails = new Emails();
        // $emails->email = $request->email;
        // $emails->save();

        // return redirect('/');

        //   $emails->email = $request->email;

        //   return redirect('/');

          $emails = new Emails;

    
          $emails->email = $email;
          $emaails->name = $name;
          
          $emails->save();
    }
}
