@extends('layouts.main')

@section('container')
<body>
    
    @foreach ($posts as $post)
        <article class="mb-5">
            <h2>
                <a href="/posts/ {{ $post->id }}">{{ $post->title }}</a>
            </h2>
            <p>{{ $post -> excerpt }}</p>
        </article>
    @endforeach
    
</body>
@endsection