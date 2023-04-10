<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('/');

Route::get('tag/{tag}', [HomeController::class, 'tag'])->name('tag');

Route::get('category/{category}', [HomeController::class, 'category'])->name('category');

Route::get('post/{post}', [HomeController::class, 'showPost'])->name('show-post');

Route::post('search', [HomeController::class, 'search'])->name('search');
Route::get('search_query={term}', [HomeController::class, 'results'])->name('results');

