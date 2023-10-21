<?php

use App\Http\Controllers\Author_Controller;
use App\Http\Controllers\Category_Controller;
use App\Http\Controllers\Post_Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Utama_Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Utama_Controller::class, 'index']);

Route::get('/posts', [Post_Controller::class, 'index']);

Route::get('/posts/{post:slug}', [Post_Controller::class, 'find_post']);

Route::get('/about', [Utama_Controller::class, 'about']);

Route::get('/categories', [Category_Controller::class, 'index']);

Route::get('/categories/{category:slug}', [Category_Controller::class, 'find_post_by_category']);

Route::get('/authors', [Author_Controller::class, 'index']);

Route::get('/authors/{user:name}', function (User $user) {
    $blog_posts = Post::all()->where('user_id', $user->id);

    return view('posts', [
        'title' => 'Posts',
        'articles' => $blog_posts
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
