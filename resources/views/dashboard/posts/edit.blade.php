@extends('web.layout')
@section('content')
    <div class="content-wrapper">
        <h1>Actualizar categoría {{ $post->title }}</h1>
        @include('dashboard.fragment._errors-form')
        <form action="{{ route('posts.update', $post->id) }}" method="post">
            @method('PATCH')
            @include('dashboard.posts._form')
        </form>
    </div>
@endsection