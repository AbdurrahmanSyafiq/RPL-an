@extends('layout.main')
@section('container')
    <div class="mt-8 px-12">
        @foreach ($posts as $post)
            <h1 class="font-bold text-xl mb-4"><a href="/posts/{{ $post['slug'] }}">{{ $post['title'] }}</a></h1>
            <p class="mb-8">{{ $post['body'] }}</p>
        @endforeach
    </div>
@endsection
