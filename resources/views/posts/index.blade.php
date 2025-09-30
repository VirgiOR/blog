<x-app-layouts>

     <h1 class="text-2xl">Aquí los posts</h1>

     <a href="{{ route('posts.create') }}">
        Crear nuevo post
    </a>
        <ul>
            @foreach ($posts as $post)
                <li>
                    <a href="{{ route('posts.show', $post) }}">
                        {{ $post->title }}
                    </a>
                </li>
            @endforeach

        </ul>
        {{ $posts->links() }}

</x-app-layouts>
   
