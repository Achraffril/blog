@extends('layout.layout')

@section('content')
    <div class="min-h-screen bg-gray-200 my-12">
        <h1 class="text-5xl text-center text-gray-800 font-bold py-6">BLOG</h1>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach ($posts as $post)
                    <div class="flex flex-col overflow-hidden bg-white rounded-lg shadow-md duration-300 hover:scale-105 hover:shadow-xl">
                        <div class="px-6 py-4 flex-grow">
                            <h2 class="text-2xl text-gray-700 font-bold"> {{ $post->titre }} </h2>
                            <p class="mt-2 text-gray-600"> {{ Str::limit($post->contenu, 150) }}
                                <a href="/show/{{ $post->id }}" class="text-blue-500 hover:underline">Read more</a>
                            </p>
                        </div>
                        <div class="px-6 py-4  mt-auto">
                            <div class="flex justify-between items-center">
                                <p class="text-gray-700 text-sm">{{ $post->user->name }}</p>
                                <p class="text-gray-400 text-sm">Created at: {{ $post->created_at->format('Y-m-d ') }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
