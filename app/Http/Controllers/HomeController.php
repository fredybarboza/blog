<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function tag(Tag $tag){

        $posts = $tag->posts()->where('status', 2)->get();

        return view('tag', compact('tag', 'posts'));

    }

    public function category(Category $category){

        $posts = Post::where('category_id', $category->id)->where('status', 2)->get();

        return view('category', compact('category', 'posts'));
    }
}
