@extends('layout.layout')

@section('content')

<!-- Login Section -->
<div class="flex items-center justify-center min-h-screen bg-gray-200">
    <div class="w-full max-w-md p-6 m-4 bg-white rounded-lg shadow-md lg:max-w-xl">
        <h2 class="text-3xl font-bold text-center text-gray-700">Login</h2>
        <form action="/login" method="post" class="mt-6">
            @csrf
            <div>
                <label for="email" class="block text-sm text-gray-700">Email</label>
                <input type="email" placeholder="example@example.com" id="email" name="email" value="{{ old('email') }}"
                       class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md focus:border-blue-500 focus:ring-blue-500">
           @error('login')
                <div class="text-red-500 text-sm">{{ $message }}</div>
           @enderror
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
            <div class="flex items-center justify-between mt-6">
                <div class="flex items-center">
                    <input id="remember_me" type="checkbox" class="w-4 h-4 text-blue-600 form-checkbox">
                    <label for="remember_me" class="ml-2 block text-sm text-gray-800">
                        Remember me
                    </label>
                </div>

            </div>
            <div class="mt-6">
                <button class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                    Login
                </button>
            </div>
        </form>
        <p class="mt-8 text-xs font-light text-center text-gray-700">
         <a href="/sign" class="font-medium text-blue-600 hover:underline">
                <button class="bg-white-200 hover:bg-white-700 font-bold py-2 px-4 rounded">
                    Sign up
                </button>
            </a>
        </p>

    </div>
</div>


@endsection
