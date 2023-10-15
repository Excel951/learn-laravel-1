<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class Post_Controller extends Controller
{
    //
    public function index()
    {
        $blog_posts = Posts::all();

        return view('posts', [
            'title' => 'Posts',
            'articles' => $blog_posts
        ]);
    }

    public function find_post($slug)
    {
        $post = Posts::find($slug);

        if (!empty($post)) {
            return view('post', [
                'title' => $post['title'],
                'article' => $post
            ]);
        }

        return 'Tidak ada post';
    }
}
