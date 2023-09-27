<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Laravel CRUD App </title>
    
    @vite('resources/css/app.css')

</head>
<body>
    <header>
        <nav class="bg-gray-900 py-4 text-white">
            <div class="container mx-auto flex justify-between items-center align-middle">
                <a href="/posts" class="text-2xl font-light">
                    Mohammed Fachry Dwi Handoko
                    <span class="text-xs tracking-widest">
                        &nbsp; 5025201159
                    </span>
                </a>
                <ul class="space-x-4">
                    <li>
                        <a href="https://github.com/Delos-343">
                            <img src="{{ asset('path_to_your_image.png') }}" alt="GitHub Profile" width="24" height="24">
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-gray-900 py-4">
        <div class="container mx-auto">
            <p class="text-center text-white">
                &copy; {{ date('Y') }} Laravel CRUD App &nbsp; | &nbsp; All rights reserved
            </p>
        </div>
    </footer>
</body>
</html>
