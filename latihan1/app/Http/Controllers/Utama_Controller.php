<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Utama_Controller extends Controller
{
    //
    public function index()
    {
        return view('home', [
            'title' => 'Home',
        ]);
    }

    public function about()
    {
        return view('profile.about', [
            'title' => 'About',
            'name' => 'Deo',
            'email' => 'deo@gmail.com',
            'image' => 'deo.jpg',
        ]);
    }
}
