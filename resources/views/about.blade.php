@extends('layouts.app')

@section('title', 'About Us - JobHive')

@section('content')
    <!-- Background Gradient Kuning ke Coklat Gelap -->
    <div class="bg-gradient-to-b from-yellow-400 to-amber-900 text-white min-h-screen">
        <!-- Hero Section -->
        <div class="container mx-auto px-6 py-24 text-center">
            <h1 class="text-6xl md:text-7xl font-bold mb-6">JobHive</h1>
            <p class="text-xl md:text-2xl max-w-4xl mx-auto leading-relaxed opacity-90">
                A simple and modern job platform created to help connect small local businesses with individuals seeking real work opportunities
            </p>
        </div>

        <!-- Our Mission Section -->
        <div class="container mx-auto px-6 py-20">
            <div class="grid md:grid-cols-2 gap-12 items-center max-w-6xl mx-auto">
                <!-- Card Mission -->
                <div class="bg-amber-950/80 rounded-3xl p-10 shadow-2xl">
                    <img src="{{ asset('images/sdg8.png') }}" alt="SDG 8" class="w-24 mx-auto mb-8">
                    <h2 class="text-4xl font-bold mb-6">Our Mission</h2>
                    <p class="text-xl leading-relaxed">
                        To support Decent Work and Economic Growth by expanding access into decent work and empowering local economic growth through UMKM job opportunities
                    </p>
                </div>

                <!-- Gambar di Kanan -->
                <div>
                    <img src="{{ asset('images/LK1.jpg') }}" alt="UMKM" class="rounded-3xl shadow-2xl w-full">
                </div>
            </div>
        </div>

        <!-- Why JobHive Section (Background Putih) -->
        <div class="bg-white text-black py-20">
            <div class="container mx-auto px-6">
                <div class="grid md:grid-cols-2 gap-12 items-center max-w-6xl mx-auto">
                    <!-- Teks di Kiri -->
                    <div>
                        <h2 class="text-4xl font-bold mb-8">Why JobHive?</h2>
                        <p class="text-2xl leading-relaxed">
                            Easy to Use, Focused on small local business,<br>
                            Modern & Transparent, Empowering Communities
                        </p>
                    </div>

                    <!-- Gambar di Kanan -->
                    <div>
                        <img src="{{ asset('images/umkms.jpg') }}" alt="Why JobHive" class="rounded-3xl shadow-2xl w-full">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection