@extends('layout.main')

@section('container')
    <div class="w-full min-h-screen">
        <div class="flex justify-center items-center">
            <div>
                <h2 class="font-bold text-2xl mb-8">{{ $posts->title }} :) </h2>
                <img class="w-auto h-auto rounded-lg mb-8" src="{{ $posts->image }}" alt="nunez">
                <h1 class="max-w-xl mb-8">{{ $posts['body'] }}</h1>
                <a href="/posts" class="mt-4 px-2 py-2 rounded-md bg-blue-500 text-white">Back to posts</a>
            </div>
        </div>
    </div>
@endsection