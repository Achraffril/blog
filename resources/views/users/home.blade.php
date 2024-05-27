@extends('layout.layout')

@section('content')

<section class="p-6 rounded-lg">
    <div class="flex items-center space-x-4">
        <div>
            <h2 class="text-xl font-bold">{{ auth()->user()->name }}</h2>
        </div>
    </div>
    <div class="mt-6">
        <h3 class="text-lg font-semibold">Aprops </h3>
        <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, dolore blanditiis eligendi eos eius voluptatem ab? Vero et, distinctio obcaecati repudiandae voluptas, magni neque possimus, voluptates porro rerum atque. Quae.
        </p>
    </div>
    <div class="mt-6">
        <a href="/post/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
           Ajoute une publication
        </a>
    </div>

    <div class="mt-8">
        <h3 class="text-lg font-semibold">Mes Blogs</h3>
        @foreach ($posts as $post)
        <div class="flex flex-col overflow-hidden bg-white rounded-lg shadow-md duration-300 hover:shadow-xl mt-4">
            <div class="px-6 py-4">
                <h2 class="text-2xl text-gray-700 font-bold">{{ $post->titre }}</h2>
                <p class="mt-2 text-gray-600">{{ Str::limit($post->contenu, 150) }}
                    <a href="/show/{{ $post->id }}" class="text-blue-500 hover:underline">Voir plus </a>
                </p>
            </div>
            <div class="px-6 py-4 border-t border-gray-200 flex justify-between items-center">
                <p class="text-gray-400 text-sm">Created at: {{ $post->created_at->format('Y-m-d') }}</p>
                <div>
                    <a href="/post/edit/{{ $post->id }}" class="text-blue-500 hover:underline">Modifier</a>
                    <a href="/post/delete/{{ $post->id }}" class="text-red-500 hover:underline ml-4">Supprimer</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection
