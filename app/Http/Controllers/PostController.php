<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\PostCreatedMail;

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

    public function store(StorePostRequest $request)
    {
        
        $post= Post::create($request->all());

        Mail::to('polgarilla@yahoo.es')->send(new PostCreatedMail($post));

        //Mail::to('polgarilla@yahoo.es')->send(new PostCreatedMail($post));


        
        return redirect()->route('posts.index');
    }

    public function edit( $post)
    {
       $post = Post::find($post);
        return view('posts.edit', compact('post'));
        
    }

    public function update(Request $request,  $post)
    {

        
        $request->validate([
            'title'=>'required|min:5|max:255',
            'slug'=>"required|unique:posts,slug,{$post}",
            'categoria'=>'required',
            'content'=>'required'
        ]);

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
