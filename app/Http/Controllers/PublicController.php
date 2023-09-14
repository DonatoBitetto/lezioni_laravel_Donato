<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage() {
        return view('homepage');
    }

    public function about_us() {
        return view('about-us');
    }

    public function where() {
        return view('where');
    }
}
