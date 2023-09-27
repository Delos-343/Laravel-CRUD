<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD App</title>
    
    @vite('resources/css/app.css')

</head>
<body>
    <header>
        <nav class="bg-blue-500 py-4 text-white">
            <div class="container mx-auto flex justify-between items-center">
                <a href="/" class="text-2xl font-semibold">
                    Mohammed Fachry Dwi Handoko
                </a>
                <ul class="space-x-4">
                    <li>
                        <a href="/posts">
                            Posts
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-gray-200 py-4">
        <div class="container mx-auto">
            <p class="text-center text-gray-600">
                &copy; {{ date('Y') }} Laravel CRUD App. All rights reserved.
            </p>
        </div>
    </footer>
</body>
</html>
