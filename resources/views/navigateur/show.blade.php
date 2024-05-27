@extends('layout.onlylinks')

@section('content')
@include('components.header')
<section class="p-6 rounded-lg">
    <div class="flex items-center space-x-4">
        <div>
            <h2 class="text-xl font-bold">{{ $post->titre }}</h2>
            <p class="text-gray-600 mt-2">Created by: {{ $post->user->name }}</p>
            <p class="text-gray-400 text-sm">Created at: {{ $post->created_at->format('Y-m-d') }}</p>
        </div>
    </div>
    <div class="mt-6 prose lg:prose-xl">
        {{ $post->contenu }}
    </div>
    <div class="mt-6">
        <a href="{{ url()->previous() }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
            Back to Posts
        </a>
    </div>
</section>
@endsection
