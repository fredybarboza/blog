<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $categories = Category::all();

        $posts = Post::where('status', 2)->orderBy('id', 'desc')->paginate(6);

        return view('home', compact('posts', 'categories'));
    }

    public function showPost(Post $post)
    {

        $posts = Post::where('status', 2)
            ->where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->orderBy('id', 'desc')
            ->limit(3)
            ->get();

        return view('Posts.show', compact('post', 'posts'));
    }

    public function tag(Tag $tag)
    {

        $posts = $tag->posts()->where('status', 2)->paginate(6);

        $name = $tag->name;

        return view('Posts.filter', compact('name', 'posts'));
    }

    public function category(Category $category)
    {
        $posts = Post::where('category_id', $category->id)->where('status', 2)->paginate(6);

        $name = $category->name;

        return view('Posts.filter', compact('name', 'posts'));
    }

    public function search(Request $request)
    {
        return redirect()->route('results', $request->search);
    }

    public function results($term)
    {
        $posts = Post::where('name', 'LIKE', '%' . $term . '%')->where('status', 2)->paginate(6);

        return view('Posts.search', compact('posts'));
    }
}
