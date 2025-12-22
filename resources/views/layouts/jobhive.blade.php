<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'JobHive')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { display: flex; flex-direction: column; min-height: 100vh; background-color: #f3f4f6; }
        main { flex: 1; }
        .card-hover:hover { transform: translateY(-10px); box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1); }
    </style>
</head>
<body class="font-sans">

    <!-- Header Versi Kita (Hanya Logo Besar) -->
    <header class="bg-yellow-400 py-6 shadow-xl">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <div class="flex items-center">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/Logo_NoBG.png') }}" alt="JobHive" class="h-32 w-auto md:h-40">
                </a>
            </div>
            <nav class="flex space-x-10 text-black text-lg font-semibold">
                <a href="{{ route('home') }}" class="hover:underline">Home</a>
                <a href="#" class="hover:underline">Job List</a>
                <a href="/aboutUs" class="hover:underline">About Us</a>
                <a href="#" class="hover:underline">Log Out</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <!-- Footer Versi Kita (Ramping, Hanya Logo + Menu + Social) -->
    <footer class="bg-yellow-400 py-6">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center">
                <div class="flex justify-center md:justify-start">
                    <img src="{{ asset('images/Logo_NoBG.png') }}" alt="JobHive" class="h-24 w-auto md:h-28">
                </div>

                <div class="grid grid-cols-2 gap-8 text-sm text-center md:text-left">
                    <div>
                        <h4 class="font-bold mb-3">Company</h4>
                        <ul class="space-y-1">
                            <li><a href="/aboutUs" class="hover:underline">About Us</a></li>
                            <li><a href="#" class="hover:underline">Partnership</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-bold mb-3">Jobs</h4>
                        <ul class="space-y-1">
                            <li><a href="#" class="hover:underline">Apply Job</a></li>
                            <li><a href="#" class="hover:underline">Company Detail</a></li>
                            <li><a href="#" class="hover:underline">Job List</a></li>
                        </ul>
                    </div>
                </div>

                <div class="flex justify-center md:justify-end space-x-4">
                    <a href="#"><img src="{{ asset('images/facebook.png') }}" alt="Facebook" class="h-8 w-8"></a>
                    <a href="#"><img src="{{ asset('images/ig.webp') }}" alt="Instagram" class="h-8 w-8"></a>
                    <a href="#"><img src="{{ asset('images/twitter.png') }}" alt="X" class="h-8 w-8"></a>
                    <a href="#"><img src="{{ asset('images/Tiktok_Icon.png') }}" alt="TikTok" class="h-8 w-8"></a>
                    <a href="#"><img src="{{ asset('images/Telegram.jpg') }}" alt="Telegram" class="h-8 w-8"></a>
                </div>
            </div>

            <div class="text-center text-sm mt-6 pt-4 border-t border-black/20">
                <p>© 2025 JobHive. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>