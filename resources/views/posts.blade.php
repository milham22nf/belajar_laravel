@extends('layouts.main')

@section('container')
<body>
    
    @foreach ($posts as $post)
            <h1 class="mb-5">{{ $post->title }}</h1>

            {!! $post -> body !!}

    @endforeach
    
    <a href="/blog">Back To Blog</a>
</body>
@endsection