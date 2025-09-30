<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts= Post::orderBy('id','desc')->paginate(10);
        
        
        return view('posts.index', compact('posts'));
           
    }

    public function create()
    {
        return view('posts.create');
    }

    
    public function show( $post)
    {
         $post = Post::find($post);
         return view('posts.show', compact('post'));
    }

    public function store(Request $request)
    {
        Post::create($request->all());
        /*$post = new Post;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->categoria = $request->categoria;
        $post->content = $request->content;
        $post->save();*/
        return redirect()->route('posts.index');
    }

    public function edit( $post)
    {
       $post = Post::find($post);
        return view('posts.edit', compact('post'));
        
    }

    public function update(Request $request,  $post)
    {
       $post = Post::find($post);
       $post->update($request->all());

        /*$post->title = $request->title;
        $post->slug = $request->slug;
        $post->categoria = $request->categoria;
        $post->content = $request->content;
        $post->save();*/

        return redirect()->route('posts.show', $post);
    }

    public function destroy( $post)
    {
      $post = Post::find($post);

        $post->delete();
        return redirect()->route('posts.index');
    }
}
