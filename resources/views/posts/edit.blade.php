<x-app-layouts>

    <h1>Aquí se mostrará el formulario para editar un post</h1>

    <form action="{{route('posts.update',$post)}}" method="POST">

        @csrf
        @method('PUT')
        
        <label for="title">Título</label>
        <input type="text" name="title" id="title" value="{{$post->title}}">
        <br><br>

        <label for="slug">Slug</label>
        <input type="text" name="slug" id="slug" value="{{$post->slug}}">
        <br><br>

        <label for="categoria">Categoría</label>
        <input type="text" name="categoria" id="categoria" value="{{$post->categoria}}">
        <br><br>

        <label for="content">Contenido</label>
        <textarea name="content" id="content" cols="30" rows="10" >{{$post->content}}</textarea>
        <br><br>

        <button type="submit">Editar Post</button>



    </form>
</x-app-layouts>
