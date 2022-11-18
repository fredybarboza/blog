<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{

    public function index(){

        $categories = Category::all();

        $posts = Post::where('status', 2)->orderBy('id', 'desc')->paginate(6);

        /*foreach($posts as $p){
            if($p->image!=null){
            dd($p->image->url);
            }
        }*/

        return view('home', compact('posts', 'categories'));
    }

    public function post(Post $post){

        $related = Post::where('status', 2)
                       ->where('category_id', $post->category_id)
                       ->where('id', '!=', $post->id)
                       ->orderBy('id', 'desc')
                       ->limit(3)
                       ->get();

        return view('post', compact('post', 'related'));
    }

    public function tag(Tag $tag){

        $posts = $tag->posts()->where('status', 2)->get();

        return view('tag', compact('tag', 'posts'));
    }

    public function category(Category $category){

        $posts = Post::where('category_id', $category->id)->where('status', 2)->get();

        return view('category', compact('category', 'posts'));
    }
}
