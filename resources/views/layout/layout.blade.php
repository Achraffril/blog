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
    @include('components.header')

    <div class="flex-1 flex overflow-hidden">
        @auth
        {{-- <aside class="bg-gray-800 w-60 space-y-6 py-7 px-2">
            <nav>
                <a href="/dashboard" class="flex items-center py-2 px-8 text-gray-100 border-r-4 border-gray-100 hover:bg-gray-700">
                    Dashboard
                </a>
                <a href="/" class="flex items-center py-2 px-8 text-gray-100 border-r-4 border-gray-100 hover:bg-gray-700">
                    Blog
                </a>
            </nav>
        </aside> --}}

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



