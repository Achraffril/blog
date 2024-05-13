@extends('layout.layout')

@section('content')

<section class="p-6 rounded-lg">
    <div class="flex items-center space-x-4">
        <div>
            <h2 class="text-xl font-bold">{{ auth()->user()->name }}</h2>
        </div>
    </div>
    <div class="mt-6">
        <h3 class="text-lg font-semibold">About Me</h3>
        <p class="text-gray-600 mt-2">
            Passionate developer with a knack for building applications with maximum efficiency.
            I have a keen interest in the latest web technologies.
        </p>
    </div>
    <div class="mt-6">
        <a href="/post/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
           + Create Post
        </a>
    </div>

    <!-- Display old posts -->
    <div class="mt-8">
        <h3 class="text-lg font-semibold">Old Posts</h3>
        @foreach ($posts as $post)
        <div class="flex flex-col overflow-hidden bg-white rounded-lg shadow-md duration-300  hover:shadow-xl mt-4">
            <div class="px-6 py-4">
                <h2 class="text-2xl text-gray-700 font-bold">{{ $post->titre }}</h2>
                <p class="mt-2 text-gray-600">{{ Str::limit($post->contenu, 150) }}
                    <a href="" class="text-blue-500 hover:underline">Read more</a>
                </p>
            </div>
            <div class="px-6 py-4 border-t border-gray-200">
                <div class="flex justify-between items-center">

                    <p class="text-gray-400 text-sm">Created at: {{ $post->created_at->format('Y-m-d') }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection

