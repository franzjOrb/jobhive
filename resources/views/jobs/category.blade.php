<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lowongan Kerja - {{ $category->name }} | JobHive</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        html, body { height: 100%; margin: 0; }
        body { display: flex; flex-direction: column; background-color: #f3f4f6; }
        main { flex: 1; }
        .card-hover:hover { 
            transform: translateY(-10px); 
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04); 
        }
    </style>
</head>
<body class="flex flex-col min-h-screen font-sans">

   <!-- Header Kuning-->
<header class="bg-yellow-400 py-6 shadow-lg">
    <div class="container mx-auto px-6 flex justify-between items-center">
        <div class="flex items-center">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/Logo_NoBG.png') }}" 
                     alt="JobHive" 
                     class="h-20 w-auto md:h-24"> 
            </a>
        </div>

        <!-- Navigasi di Kanan -->
        <nav class="flex space-x-10 text-black text-lg font-medium">
            <a href="{{ route('home') }}" class="hover:underline">Home</a>
            <a href="#" class="hover:underline">Job List</a>
            <a href="#" class="hover:underline">About Us</a>
            <a href="#" class="hover:underline">Log Out</a>
        </nav>
    </div>
</header>

    <!-- Main Content -->
    <main class="container mx-auto my-12 px-6 flex-1">
        <div class="text-center mb-12">
            <h1 class="text-5xl font-bold text-gray-800 mb-4">Lowongan Kerja</h1>
            <h2 class="text-4xl font-bold text-yellow-600">{{ $category->name }}</h2>
        </div>

        @if($jobs->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10">
                @foreach($jobs as $job)
                    <a href="{{ route('jobs.detail', [$category->slug, $job->slug]) }}" class="block group">
                        <div class="bg-white rounded-3xl overflow-hidden shadow-2xl transition-all duration-300 card-hover h-full flex flex-col">
                            
                            <div class="relative h-64 w-full overflow-hidden">
                                @if($job->image && file_exists(public_path('images/' . $job->image)))
                                    <img src="{{ asset('images/' . $job->image) }}" 
                                         alt="{{ $job->title }}" 
                                         class="absolute inset-0 w-full h-full object-cover">
                                @else
                                    <div class="absolute inset-0 bg-gradient-to-br from-yellow-200 to-yellow-400 flex items-center justify-center">
                                        <p class="text-gray-700 font-medium text-center px-4">{{ $job->title }}</p>
                                    </div>
                                @endif
                            </div>

                            
                            <div class="p-6 bg-yellow-400 text-black flex-1">
                                <h3 class="text-2xl font-bold mb-3">{{ $job->title }}</h3>
                                <p class="text-sm opacity-90 line-clamp-3 mb-4">{{ $job->description }}</p>
                                
                                <div class="text-sm space-y-1">
                                    <p class="font-medium flex items-center gap-2">📍 {{ $job->location }}</p>
                                    <p class="font-medium flex items-center gap-2">💰 {{ $job->salary_range }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="mt-12 flex justify-center">
                {{ $jobs->links() }}
            </div>
        @else
            <div class="text-center py-20">
                <p class="text-2xl text-gray-600">Belum ada lowongan kerja di {{ $category->name }} saat ini.</p>
                <p class="text-lg text-gray-500 mt-4">Silakan cek kembali nanti ya!</p>
            </div>
        @endif
    </main>

   
<footer class="bg-yellow-400 py-8">
    <div class="container mx-auto px-6 flex flex-col md:flex-row justify-between items-start">
        
        <div class="mb-8 md:mb-0 flex flex-col items-start">
            
            <div class="mb-6">
                <img src="{{ asset('images/Logo_NoBG.png') }}" 
                     alt="JobHive" 
                     class="h-24 w-auto md:h-28">
            </div>

            
            <p class="text-sm text-black mb-6">© 2025 JobHive. All rights reserved.</p>

            
            <div class="flex space-x-4">
                <a href="#"><img src="{{ asset('images/facebook.png') }}" alt="Facebook" class="h-10 w-10 rounded-full"></a>
                <a href="#"><img src="{{ asset('images/ig.webp') }}" alt="Instagram" class="h-10 w-10 rounded-full"></a>
                <a href="#"><img src="{{ asset('images/twitter.png') }}" alt="X" class="h-10 w-10 rounded-full"></a>
                <a href="#"><img src="{{ asset('images/Tiktok_Icon.png') }}" alt="TikTok" class="h-10 w-10 rounded-full"></a>
                <a href="#"><img src="{{ asset('images/Telegram.jpg') }}" alt="Telegram" class="h-10 w-10 rounded-full"></a>
            </div>
        </div>

        
        <div class="grid grid-cols-2 gap-12 text-sm">
            <div>
                <h4 class="font-bold text-black mb-3">Company</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-black hover:underline">About Us</a></li>
                    <li><a href="#" class="text-black hover:underline">Partnership</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold text-black mb-3">Jobs</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-black hover:underline">Apply Job</a></li>
                    <li><a href="#" class="text-black hover:underline">Company Detail</a></li>
                    <li><a href="#" class="text-black hover:underline">Job List</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>
</html>