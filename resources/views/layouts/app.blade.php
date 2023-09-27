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
                <a href="/posts" class="sm:text-2xl font-light">
                    Mohammed Fachry Dwi Handoko
                    <span class="text-xs tracking-widest mt-2 hidden sm:flex">
                        5025201159 &nbsp; | &nbsp; PBKK IUP &nbsp; | &nbsp; IF ITS
                    </span>
                </a>
                <ul class="space-x-4">
                    <li>
                        <a href="https://github.com/Delos-343">
                            <img src="{{ asset('images/Apple_of_Eden.png') }}" alt="GitHub Profile" width="36" height="36">
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
            <p class="text-xs sm:text-normal font-light text-center text-white">
                &copy; {{ date('Y') }} Laravel CRUD App &nbsp; | &nbsp; All rights reserved
            </p>
        </div>
    </footer>
</body>
</html>
