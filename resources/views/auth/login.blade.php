@extends('layouts.jobhive')

@section('title', 'Login - JobHive')

@section('content')
    <div class="min-h-screen bg-gray-100 flex items-center justify-center px-6 py-12">

        <!-- Form Login Tengah -->
        <div class="bg-white rounded-3xl shadow-2xl p-10 max-w-md w-full">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-10">Login</h2>

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="email" class="block text-lg font-medium text-gray-700 mb-2">Email *</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required
                           class="w-full px-6 py-4 border border-gray-300 rounded-xl text-lg focus:outline-none focus:ring-4 focus:ring-yellow-400">
                    @error('email')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-8">
                    <label for="password" class="block text-lg font-medium text-gray-700 mb-2">Password *</label>
                    <input type="password" id="password" name="password" required
                           class="w-full px-6 py-4 border border-gray-300 rounded-xl text-lg focus:outline-none focus:ring-4 focus:ring-yellow-400">
                    @error('password')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="w-full bg-yellow-400 text-black py-4 rounded-xl text-xl font-bold hover:bg-yellow-500 transition shadow-xl">
                    Login
                </button>
            </form>

            <p class="text-center mt-8 text-gray-600">
                Belum punya akun? <a href="{{ route('register') }}" class="text-yellow-600 hover:underline font-medium">Register</a>
            </p>
        </div>
    </div>
@endsection