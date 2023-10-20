<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];
}


// Category::create([
//     'name' => 'Web Design',
//     'slug' => 'web-design'
// ])
// Category::create([
//     'name' => 'Mobile Application',
//     'slug' => 'mobile-application'
// ])