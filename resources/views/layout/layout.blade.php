<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="https://cdn.tailwindcss.com">
</head>
<body class="bg-gray-200 flex flex-col min-h-screen">

    <!-- Navigation -->
    <nav class="bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Mobile menu button -->
                <button type="button" class="sm:hidden inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700">
                    <span class="sr-only">Open main menu</span>
                    <!-- Icon when menu is closed -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                    <!-- Icon when menu is open -->
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <!-- Logo -->
                <a href="/" class="flex-shrink-0 flex items-center text-white text-3xl font-bold hover:text-gray-300">
                    Blog
                </a>

                <!-- Desktop Menu -->


                @auth
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <a href="/dashboard" class="text-gray-300 flex hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                  </svg>
                            </span>
                            <span class="ms-2">{{ auth()->user()->name }}</span>
                        </a>
                        <a href="/logout" class="ml-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Logout
                        </a>
                    </div>
                @endauth

                @guest
                    <div class="hidden sm:block sm:ml-6">
                        <div class="flex space-x-4">
                            <a href="/" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Blog</a>
                        </div>
                    </div>
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <a href="/login" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Login
                        </a>
                    </div>
                @endguest

            </div>
        </div>
    </nav>

    <div class="flex-1 flex overflow-hidden">
        @auth
        <aside class="bg-gray-800 w-60 space-y-6 py-7 px-2">
            <nav>
                <a href="/dashboard" class="flex items-center py-2 px-8 text-gray-100 border-r-4 border-gray-100 hover:bg-gray-700">
                    Dashboard
                </a>
                <a href="/" class="flex items-center py-2 px-8 text-gray-100 border-r-4 border-gray-100 hover:bg-gray-700">
                    Blog
                </a>
            </nav>
        </aside>

        @endauth


        <main class="flex-1 bg-gray-200">
            @yield('content')
        </main>
    </div>

    <footer class="bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="py-8 flex flex-wrap items-center justify-between">
                <a href="/" class="text-white text-3xl font-bold hover:text-gray-300">
                    Blog
                </a>

                    <ul class="flex flex-wrap items-center justify-center text-sm text-white">
                        <li>
                            <a href="/" class="hover:text-gray-300 mr-4">Blog</a>
                        </li>
                        @auth
                        <li>
                            <a href="/dashboard" class="hover:text-gray-300 mr-4">Dashboard</a>
                        </li>
                        @endauth
                    </ul>

            </div>
            <div class="border-t border-gray-700 pt-4 text-sm text-center text-gray-400">
                © 2024 Your Company. All rights reserved.
            </div>
        </div>
    </footer>
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>



