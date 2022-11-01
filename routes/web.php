<?php

use App\Http\Controllers\HomeController;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $posts = Post::where('status', 2)->paginate(6);
    return view('home', compact('posts'));
})->name('/');

Route::get('tag/{tag}', [HomeController::class, 'tag'])->name('tag');

Route::get('category/{category}', [HomeController::class, 'category'])->name('category');

Route::get('post/{post}', function(Post $post){
    return view('post', compact('post'));
})->name('post');


