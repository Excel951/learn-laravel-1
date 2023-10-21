<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class Category_Controller extends Controller
{
public function index() {
    return view('categories', [
        'title' => 'Posts Category',
        'categories' => Category::all()
    ]);
}

    public function find_post_by_category(Category $category) {
        $blog_posts = Post::all()->where('category_id', $category->id);

        return view('category', [
            'title' => 'Categories '.$category->name,
            'page_name' => $category->name,
            'articles' => $blog_posts
        ]);
    }
}
