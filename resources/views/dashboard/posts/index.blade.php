@extends('layouts.app')

@section('content')
    <a class="btn btn-success my-3" href="{{ route('posts.create') }}">Crear publicación</a>
    <table class="table">
        <thead>
            <th>Titulo</th>
            <th>Categoria</th>
            <th>Posted</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category_id->title }}</td>
                    <td>{{ $post->posted }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('posts.edit', $post) }}">Editar</a>
                        <a class="btn btn-primary" href="{{ route('posts.show', $post) }}">Ver</a>
                        <form action="{{ route('posts.destroy', $post) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger mt-2" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
@endsection
