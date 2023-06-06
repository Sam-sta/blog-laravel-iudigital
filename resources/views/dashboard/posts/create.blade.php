@extends('dashboard.layout')

@section('content')
        <h1>Crear Publicaciones</h1>
        @include('dashboard.fragment._errors-form')
        <form action="{{ route('posts.store') }}" method="post">
            @include('dashboard.posts._form')
        </form>
@endsection
