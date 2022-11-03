<?php

namespace App\Http\Controllers;
use App\Models\Emails;
use Illuminate\Http\Request;

class MailController extends Controller
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
        $emails = new Emails();
        $emails->email = request('email');

        $names = new Emails();
        $names->name = request('name');
        
        $emails->save();

        

        return redirect('/');

        //   $emails->email = request->email;

        //   return redirect('/');
    }
}
