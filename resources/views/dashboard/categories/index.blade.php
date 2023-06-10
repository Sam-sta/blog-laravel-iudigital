@extends('dashboard.layout')

@section('content')
    <a class="btn btn-primary" href="{{ route('categories.create') }}">Crear categoría</a>
    <table class="table">
        <thead>
            <th>Nombre Categoria</th>
            <th>Slug</th>
            <th colspan="2">Acciones</th>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->title }}</td>
                    <td>{{ $category->slug }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('categories.edit', $category) }}">Editar</a>
                        <a class="btn btn-primary" href="{{ route('categories.show', $category) }}">Ver</a>
                        <form action="{{ route('categories.destroy', $category) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger mt-2" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $categories->links() }}
@endsection
