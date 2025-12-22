<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $job->title }} - JobHive</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        html, body { height: 100%; margin: 0; }
        body { display: flex; flex-direction: column; }
        main { flex: 1; }
    </style>
</head>
<body class="bg-gray-100 font-sans flex flex-col min-h-screen">

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

    <!-- Detail Content -->
    <main class="container mx-auto my-12 px-6 flex-1">
        <div class="bg-white rounded-3xl shadow-2xl p-10 max-w-5xl mx-auto">
            <a href="{{ route('jobs.category', $category->slug) }}" class="text-yellow-600 hover:underline mb-6 inline-block">
                ← Kembali ke Lowongan {{ $category->name }}
            </a>

            <h1 class="text-4xl font-bold text-gray-800 mb-4">{{ $category->name }}</h1>
            <h2 class="text-3xl font-bold text-gray-800 mb-8">{{ $job->title }}</h2>

            <div class="flex flex-wrap gap-8 text-gray-700 mb-10 text-lg">
                <div class="flex items-center gap-3">📍 {{ $job->location }}</div>
                <div class="flex items-center gap-3">🕒 {{ $job->employment_type }}</div>
                @if($job->salary_range)
                <div class="flex items-center gap-3">💰 {{ $job->salary_range }}</div>
                @endif
            </div>

            <div class="prose prose-lg max-w-none text-gray-700 mb-12">
                <h3 class="text-3xl font-bold mb-6">Deskripsi Pekerjaan</h3>
                <div class="whitespace-pre-line leading-relaxed">{!! nl2br(e($job->full_description ?? $job->description)) !!}</div>
            </div>

            <div class="text-center">
                <button onclick="document.getElementById('applyModal').classList.remove('hidden')"
                        class="bg-black text-white px-16 py-5 rounded-full text-2xl font-bold hover:bg-gray-800 transition shadow-xl">
                    Apply Now
                </button>
            </div>

            @if(session('success'))
                <div class="mt-8 p-6 bg-green-100 text-green-800 rounded-xl text-center text-lg font-semibold">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </main>

    <!-- Modal Apply (Fixed Total) -->
    <div id="applyModal" class="hidden fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-50 px-4 overflow-y-auto">
        <div class="bg-white rounded-3xl p-10 max-w-2xl w-full my-8 shadow-2xl max-h-screen overflow-y-auto">
            <!-- Tombol Close di Kanan Atas -->
            <div class="flex justify-end mb-4">
                <button onclick="document.getElementById('applyModal').classList.add('hidden')" class="text-gray-500 hover:text-gray-700 text-3xl font-light">&times;</button>
            </div>

            <h3 class="text-3xl font-bold text-center mb-8 text-gray-800">Lamar Posisi {{ $job->title }}</h3>
            <form action="{{ route('jobs.apply', [$category->slug, $job->slug]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="space-y-6">
                    <input type="text" name="name" placeholder="Nama Lengkap" required class="w-full px-6 py-4 border border-gray-300 rounded-xl text-lg focus:outline-none focus:ring-4 focus:ring-yellow-400">

                    <input type="email" name="email" placeholder="Email" required class="w-full px-6 py-4 border border-gray-300 rounded-xl text-lg focus:outline-none focus:ring-4 focus:ring-yellow-400">

                    <input type="text" name="phone" placeholder="No. Handphone" required class="w-full px-6 py-4 border border-gray-300 rounded-xl text-lg focus:outline-none focus:ring-4 focus:ring-yellow-400">

                    <textarea name="cover_letter" rows="5" placeholder="Cover Letter (Opsional)" class="w-full px-6 py-4 border border-gray-300 rounded-xl text-lg focus:outline-none focus:ring-4 focus:ring-yellow-400"></textarea>

                    <div>
                        <label class="block text-lg font-medium text-gray-700 mb-3">Upload CV (PDF, max 10MB)</label>
                        <input type="file" name="cv" accept=".pdf" required class="w-full file:py-4 file:px-8 file:rounded-full file:bg-yellow-400 file:text-black file:font-bold">
                    </div>

                    <div class="flex gap-6 mt-8">
                        <button type="submit" class="flex-1 bg-yellow-400 text-black py-4 rounded-xl text-xl font-bold hover:bg-yellow-500 transition">
                            Kirim Lamaran
                        </button>
                        <button type="button" onclick="document.getElementById('applyModal').classList.add('hidden')" class="flex-1 bg-gray-300 text-gray-800 py-4 rounded-xl text-xl font-bold hover:bg-gray-400 transition">
                            Batal
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Backdrop Click to Close -->
    <script>
        document.getElementById('applyModal').addEventListener('click', function(e) {
            if (e.target === this) {
                this.classList.add('hidden');
            }
        });
    </script>

    <!-- Footer Kuning-->
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