@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <h1>Actualizar categoría {{ $category->title }}</h1>
        @include('dashboard.fragment._errors-form')
        <form action="{{ route('categories.update', $category->id) }}" method="post">
            @method('PATCH')
            @include('dashboard.categories._form')
        </form>
    </div>
@endsection