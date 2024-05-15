@extends('layout.layout')

@section('content')
   <!-- Blog post form -->
   <div class="flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md p-6 m-4 bg-white rounded-lg shadow-md lg:max-w-xl">
        <h2 class="text-3xl font-bold text-center text-gray-700">Update Blog Post</h2>
        <form action="/post/update/{{ $post->id }}" method="POST" class="mt-6">
            @csrf
            <div>
                <label for="title" class="block text-sm text-gray-700">Title</label>
                <input type="text" placeholder="Enter your blog post title" id="title" name="titre"  value='{{ $post->titre}}'
                       class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md focus:border-blue-500 focus:ring-blue-500">
            </div>
            <div class="mt-4">
                <label for="content" class="block text-sm text-gray-700">Content</label>
                <textarea id="content" placeholder="Write your blog post here..." name="contenu"
                       class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md focus:border-blue-500 focus:ring-blue-500">{{ $post->contenu}}</textarea>
            </div>
            <div class="flex items-center justify-between mt-6">
                <button class="px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
