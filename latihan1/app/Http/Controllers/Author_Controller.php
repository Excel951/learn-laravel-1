<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class Author_Controller extends Controller
{
    public function index()
    {
        return view('authors', [
            'title' => "Authors",
            'authors' => User::all(),
        ]);
    }

    public function find_author(User $user)
    {
        $blog_posts = Post::all()->where('user_id', $user->id);

        return view('posts', [
            'title' => 'Posts by '.$user->name,
            'page_name' => 'Author : '.$user->name,
            'articles' => $blog_posts
        ]);
    }
}
