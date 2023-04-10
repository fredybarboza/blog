<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::view('admin', 'Admin.dashboard')->name('admin');


Route::resource('categories', CategoryController::class)->middleware('can:admin.categories')->names('admin.categories');
Route::resource('tags', TagController::class)->middleware('can:admin.tags')->names('admin.tags');
Route::resource('posts', PostController::class)->names('admin.posts');
Route::resource('users', UserController::class)->middleware('can:admin.users')->names('admin.users');

