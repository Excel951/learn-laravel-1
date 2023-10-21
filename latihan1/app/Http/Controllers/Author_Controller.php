<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Author_Controller extends Controller
{
    public function index() {
        return view('authors', [
            'title' => "Authors",
            'authors' => User::all(),
        ]);
    }
}
