<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;

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

Route::get('/', function () {
    return view('posts', [
        'posts' => Post::latest('published_at')->with(['author', 'category'])->get()
    ]);
});

Route::get('post/{post:slug}', function (Post $post) {
    // Find a post by its slug and pass it to a view called "post"
    return view('post', ['post' => $post]);
});

Route::get('category/{category:slug}', function (Category $category) {
    return view('posts', ['posts' => $category->posts->load(['category', 'author'])]);
});

Route::get('author/{author:username}', function (User $author) {
    return view('posts', ['posts' => $author->posts->load(['category', 'author'])]);
});
