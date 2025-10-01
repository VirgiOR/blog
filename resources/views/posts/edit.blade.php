<x-app-layouts>

    <h1>Aquí se mostrará el formulario para editar un post</h1>

    @if ($errors->any())
        <div>
            <h2>Errores:</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color: red">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        
    @endif

    <form action="{{route('posts.update',$post)}}" method="POST">

        @csrf
        @method('PUT')
        
        <label for="title">Título</label>
        <input type="text" name="title" id="title" value="{{old('title',$post->title)}}">
        <br><br>

        <label for="slug">Slug</label>
        <input type="text" name="slug" id="slug" value="{{old('slug'),$post->slug}}">
        <br><br>

        <label for="categoria">Categoría</label>
        <input type="text" name="categoria" id="categoria" value="{{old('categoria'),$post->categoria}}">
        <br><br>

        <label for="content">Contenido</label>
        <textarea name="content" id="content" cols="30" rows="10" >{{old('content'),$post->content}}</textarea>
        <br><br>

        <button type="submit">Editar Post</button>



    </form>
</x-app-layouts>
