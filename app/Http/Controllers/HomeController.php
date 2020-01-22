<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // ---------------- [    Home Controller    ] ---------------
    public function locationAutoComplete(Request $request) {
        return view("auto-complete");
    }
}
