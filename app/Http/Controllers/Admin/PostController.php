<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $posts = Post::where('user_id', Auth()->user()->id)->orderBy('id', 'desc')->get();

        return view('Admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');

        $tags = Tag::all();

        return view('Admin.posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {   
        $user = User::FindOrFail($request->user_id);
        
        $this->authorize('post', $user);
        
        $post = Post::create($request->all());

        if($request->file('file')){

            $nombre = $request->file('file')->getClientOriginalName();

            $ruta = storage_path() . '\app\public\Posts/' . $nombre;

            Image::make($request->file('file'))->resize(640, 480)->save($ruta);
            
            $post->image()->create([
                'url' => '/Posts/' . $nombre
            ]);
        }

        if($request->tags){
            $post->tags()->attach($request->tags);
        }

        return redirect()->route('admin.posts.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    { 
        $this->authorize('edit', $post);

        $categories = Category::pluck('name', 'id');

        $tags = Tag::all();

        return view('Admin.posts.edit', compact('categories', 'tags', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        if(isset($request->user_id))
        {
            return false;
        }

        $post->update($request->all());
        
        $post->tags()->sync($request->tags);

        if($request->file('file')){

            $nombre = $request->file('file')->getClientOriginalName();

            $ruta = storage_path() . '\app\public\Posts/' . $nombre;

            Image::make($request->file('file'))->resize(640, 480)->save($ruta);

            if($post->image){
                Storage::disk('public')->delete($post->image->url);

                $post->image()->update([
                    'url' => '/Posts/' . $nombre
                ]);

            }
            else{
                $post->image()->create([
                    'url' => '/Posts/' . $nombre
                ]); 
            }
            
        }
        
        return redirect()->route('admin.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $this->authorize('destroy', $post);
        $post->delete();
        return redirect()->route('admin.posts.index');
    }
}
