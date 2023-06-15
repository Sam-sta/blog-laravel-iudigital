@extends('dashboard.layout')

@section('content')
    @can('guest.posts.create')
        <a class="btn btn-primary" href="{{ route('posts.create') }}">Crear publicación</a>
    @endcan
    <table class="table">
        <thead>
            <th>Titulo</th>
            <th>Categoria</th>
            <th>Posted</th>
            <th colspan="2">Acciones</th>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->title }}</td>
                    <td>{{ $post->posted }}</td>
                    <td>
                        @can('editor.posts.edit')
                            <a class="btn btn-primary" href="{{ route('posts.edit', $post) }}">Editar</a>
                        @endcan
                        <a class="btn btn-primary" href="{{ route('posts.show', $post) }}">Ver</a>
                        @can('editor.posts.destroy')
                            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger mt-2" type="submit">Eliminar</button>
                            </form>
                        @endcan
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
@endsection
