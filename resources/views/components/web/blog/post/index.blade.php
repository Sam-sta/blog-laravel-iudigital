{{ $slot }}
{{ $header }}

@foreach ($posts as $post)
    <div class="card card-white mb-2">
        <h3>{{ $post->title }}</h3>
        <p>{{ $post->description }}</p>
        <a href="{{ route('web.blog.show', $post) }}" class="btn btn-primary">Ver</a>
    </div>
@endforeach