<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    // $posts = Post::with(['author', 'category']);

    return view('posts', ['title' => 'Blog Page', 'posts' => Post::with('author', 'category')->filter(request(['search', 'category', 'author']))->paginate(5)->withQueryString()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post Page', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
    $posts = $user->posts->load(['author', 'category']);

    return view('posts', ['title' => count($posts) . ' Articles by' . $user->name, 'posts' => $posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    $posts = $category->posts->load(['author', 'category']);
    return view('posts', ['title' => 'Articles in : ' . $category->name, 'posts' => $posts]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});

Route::get('/login', function () {
    echo "okoko";
})->name('login');
