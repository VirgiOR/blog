<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\PostController;

use App\Models\Post;

Route::get('/', HomeController::class) ;

/*Route::get('/posts', [PostController::class,'index'])->name('posts.index');

Route::get('/posts/create', [PostController::class,'create'])->name('posts.create');

Route::post('/posts', [PostController::class,'store']) ->name('posts.store');

Route::get('/posts/{post}', [PostController::class,'show'])->name('posts.show');

Route::get('/posts/{post}/edit', [PostController::class,'edit']
)->name('posts.edit');

Route::put('posts/{post}', [PostController::class,'update']
)->name('posts.update'); 

Route::delete('/posts/{post}', [PostController::class,'destroy']
)->name('posts.destroy');*/

Route::resource('posts', PostController::class)

->names('posts');


    


Route::get('prueba', function() {
    //crear un post
    /*$post = new Post;
    $post->title = 'Mi primer post 3';
    $post->categoria = 'Categoria de prueba 3';
    $post->content = 'Contenido de prueba para mi primer post 3';
    $post->save(); */
      

    //Actualizar registro
    //$post = Post::find(1);
    /*$post = Post::where('title','Mi primer post')->first();
    $post->categoria =  'Desarrollo web';
    $post->save();
    return $post;*/

    

    $post = Post::find(1);//Recuperar un registro por su llave primaria


    //llamar varios registros y listarlos
    /*$posts = Post::orderBy('categoria','asc')
                  ->select('id','title','categoria')
                  ->take(2)
                  ->get();*/

    //Eliminar registros
    /*$post = Post::find(1);
    $post->delete();
    return "Post eliminado";*/



     dd($post->is_active);

    //return $post->published_at->is_active; //created_at es un campo timestamp que se crea automáticamente en la base de datos
    // (siempre y cuando la tabla tenga los campos timestamps() en la migración)





});


/*Route::get('/posts/{post}/{category}', function( $post,$category) {
    return "Aquí se mostrará el post $post de la categoría $category";
});*/





