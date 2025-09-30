<x-app-layouts>

    <h1>Aquí se mostrará el formulario para crear un post</h1>

    <form action="/posts" method="POST">

        @csrf
        <label for="title">Título</label>
        <input type="text" name="title" id="title">
        <br><br>

        <label for="slug">Slug</label>
        <input type="text" name="slug" id="slug">
        <br><br>

        <label for="categoria">Categoría</label>
        <input type="text" name="categoria" id="categoria">
        <br><br>

        <label for="content">Contenido</label>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
        <br><br>

        <button type="submit">Crear Post</button>



    </form>
</x-app-layouts>
