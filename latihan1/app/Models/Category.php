<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function posts(): HasMany {
        return $this->hasMany(Post::class);
    }
}


// Category::create([
//     'name' => 'Web Design',
//     'slug' => 'web-design'
// ])
// Category::create([
//     'name' => 'Mobile Application',
//     'slug' => 'mobile-application'
// ])