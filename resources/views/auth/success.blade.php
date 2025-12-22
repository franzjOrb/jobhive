@extends('layouts.jobhive')

@section('title', 'Welcome - JobHive')

@section('content')
    <div class="min-h-screen bg-gray-100 flex items-center justify-center px-6">
        <div class="bg-white rounded-3xl shadow-2xl p-10 max-w-md w-full text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-6">Selamat Datang, {{ Auth::user()->name }}!</h2>
            <p class="text-lg text-gray-600 mb-10">Anda berhasil login ke JobHive.</p>

            <div class="space-y-4">
                <a href="{{ route('home') }}" class="block w-full bg-yellow-400 text-black py-4 rounded-xl text-xl font-bold hover:bg-yellow-500 transition">
                    Kembali ke Home
                </a>

                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="block w-full bg-black text-white py-4 rounded-xl text-xl font-bold hover:bg-gray-800 transition">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection