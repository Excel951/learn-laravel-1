<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class Post_Controller extends Controller
{
    //
    public function index()
    {
        $blog_posts = Post::all();

        return view('posts', [
            'title' => 'Posts',
            'articles' => $blog_posts
        ]);
    }

    public function find_post(Post $post)
    {
        // $post = Post::findOrFail($post);

        if (!empty($post)) {
            return view('post', [
                'title' => $post['title'],
                'article' => $post
            ]);
        }

        return 'Tidak ada post';
    }
}
