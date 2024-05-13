@extends('layout.layout')

@section('content')
   <!-- Sign-up form -->
   <div class="flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md p-6 m-4 bg-white rounded-lg shadow-md lg:max-w-xl">
        <h2 class="text-3xl font-bold text-center text-gray-700">Create Account</h2>
        <form action="/sign/store" method="post" class="mt-6">
            @csrf
            <div>
                <label for="name" class="block text-sm text-gray-700">Name</label>
                <input type="text" placeholder="Enter your name" id="name" name="name"
                       class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md focus:border-blue-500 focus:ring-blue-500">
                @error('name')
                       <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror

            </div>
            <div class="mt-4">
                <label for="email" class="block text-sm text-gray-700">Email</label>
                <input type="email" placeholder="example@example.com" id="email" name="email"
                       class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md focus:border-blue-500 focus:ring-blue-500">
                @error('email')
                       <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mt-4">
                <label for="password" class="block text-sm text-gray-700">Password</label>
                <input type="password" placeholder="********" id="password" name="password"
                       class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md focus:border-blue-500 focus:ring-blue-500">
                       @error('password')
                       <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
                    </div>
            <div class="mt-4">
                <label for="passwordConfirmation" class="block text-sm text-gray-700">Confirm Password</label>
                <input type="password" placeholder="********" id="passwordConfirmation" name="password_confirmation"
                       class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md focus:border-blue-500 focus:ring-blue-500">
                       @error('password')
                       <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
                    </div>
            <div class="flex items-center justify-between mt-6">
                <button class="px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                    Sign Up
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
