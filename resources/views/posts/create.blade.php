<x-app-layouts>

    <h1>Aquí se mostrará el formulario para crear un post</h1>
    


    {{--@if ($errors->any())
        <div>
            <h2>Errores:</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color: red">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        
    @endif--}}

    <form action="/posts" method="POST">

        @csrf
        <label for="title">Título</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}">
        <br><br>

        @error('title')
            <small style="color: red">{{ $message }}</small>
            <br><br>
            
        @enderror

        <label for="slug">Slug</label>
        <input type="text" name="slug" id="slug" value="{{ old('slug') }}">
        <br><br>

        @error('slug')
            <small style="color: red">{{ $message }}</small>
            <br><br>
            
        @enderror

        <label for="categoria">Categoría</label>
        <input type="text" name="categoria" id="categoria" value="{{ old('categoria') }}">
        <br><br>

        @error('categoria')
            <small style="color: red">{{ $message }}</small>
            <br><br>
            
        @enderror

        <label for="content">Contenido</label>
        <textarea name="content" id="content" cols="30" rows="10">{{old('content')}}</textarea>
        <br><br>

        @error('content')
            <small style="color: red">{{ $message }}</small>
            <br><br>
            
        @enderror

        <button type="submit">Crear Post</button>



    </form>
</x-app-layouts>
