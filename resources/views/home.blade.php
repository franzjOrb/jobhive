@extends('layouts.app')

@section('title', 'Home - JobHive')

@section('content')
    <div class="container mx-auto px-6 py-12">
        <h1 class="text-5xl font-bold text-center text-gray-800 mb-12">Meet The Companies</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
            <a href="{{ route('jobs.category', 'keripikz') }}" class="group">
                <div class="bg-white rounded-3xl overflow-hidden shadow-2xl transition-all duration-300 card-hover">
                    <img src="{{ asset('images/keripikz.jpeg') }}" alt="KeripikZ" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="p-6 bg-yellow-400 text-center">
                        <h3 class="text-3xl font-bold">KeripikZ</h3>
                    </div>
                </div>
            </a>

            <a href="{{ route('jobs.category', 'cateringz') }}" class="group">
                <div class="bg-white rounded-3xl overflow-hidden shadow-2xl transition-all duration-300 card-hover">
                    <img src="{{ asset('images/MBG.jpg') }}" alt="CateringZ" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="p-6 bg-yellow-400 text-center">
                        <h3 class="text-3xl font-bold">CateringZ</h3>
                    </div>
                </div>
            </a>

            <a href="{{ route('jobs.category', 'kopi-masa-lalu') }}" class="group">
                <div class="bg-white rounded-3xl overflow-hidden shadow-2xl transition-all duration-300 card-hover">
                    <img src="{{ asset('images/cs.jpeg') }}" alt="Kopi Masa Lalu" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="p-6 bg-yellow-400 text-center">
                        <h3 class="text-3xl font-bold">Kopi Masa Lalu</h3>
                    </div>
                </div>
            </a>

            <a href="{{ route('jobs.category', 'bintang-surya') }}" class="group">
                <div class="bg-white rounded-3xl overflow-hidden shadow-2xl transition-all duration-300 card-hover">
                    <img src="{{ asset('images/Bintang.jpg') }}" alt="Bintang Surya" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="p-6 bg-yellow-400 text-center">
                        <h3 class="text-3xl font-bold">Bintang Surya</h3>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection