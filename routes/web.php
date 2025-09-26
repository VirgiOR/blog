<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\PostController;

use App\Models\Post;

Route::get('/', HomeController::class);

Route::get('/posts', [PostController::class,'index']);

Route::get('/posts/create', [PostController::class,'create']);

Route::get('/posts/{post}', [PostController::class,'show']);

Route::get('prueba', function() {
    //crear un post
    $post = new Post;
    $post->title = 'Mi primer post 3';
    $post->categoria = 'Categoria de prueba 3';
    $post->content = 'Contenido de prueba para mi primer post 3';
    $post->save(); 
      

    //Actualizar registro
    //$post = Post::find(1);
    /*$post = Post::where('title','Mi primer post')->first();
    $post->categoria =  'Desarrollo web';
    $post->save();
    return $post;*/

    //llamar varios registros y listarlos
    /*$posts = Post::orderBy('categoria','asc')
                  ->select('id','title','categoria')
                  ->take(2)
                  ->get();*/

    //Eliminar registros
    /*$post = Post::find(1);
    $post->delete();
    return "Post eliminado";*/





    return $post; 





});


/*Route::get('/posts/{post}/{category}', function( $post,$category) {
    return "Aquí se mostrará el post $post de la categoría $category";
});*/





