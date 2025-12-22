@extends('layouts.jobhive')

@section('title', 'Register - JobHive')

@section('content')
    <div class="min-h-screen bg-gray-100 flex items-center justify-center px-6 py-12">

        <!-- Form Register Tengah -->
        <div class="bg-white rounded-3xl shadow-2xl p-10 max-w-md w-full">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-10">Register</h2>

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block text-lg font-medium text-gray-700 mb-2">Nama Lengkap *</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required
                           class="w-full px-6 py-4 border border-gray-300 rounded-xl text-lg focus:outline-none focus:ring-4 focus:ring-yellow-400">
                    @error('name')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="email" class="block text-lg font-medium text-gray-700 mb-2">Email *</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required
                           class="w-full px-6 py-4 border border-gray-300 rounded-xl text-lg focus:outline-none focus:ring-4 focus:ring-yellow-400">
                    @error('email')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-lg font-medium text-gray-700 mb-2">Password *</label>
                    <input type="password" id="password" name="password" required
                           class="w-full px-6 py-4 border border-gray-300 rounded-xl text-lg focus:outline-none focus:ring-4 focus:ring-yellow-400">
                    @error('password')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password_confirmation" class="block text-lg font-medium text-gray-700 mb-2">Konfirmasi Password *</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required
                           class="w-full px-6 py-4 border border-gray-300 rounded-xl text-lg focus:outline-none focus:ring-4 focus:ring-yellow-400">
                </div>

                <div class="mb-8">
                    <label for="dob" class="block text-lg font-medium text-gray-700 mb-2">Tanggal Lahir *</label>
                    <input type="text" id="dob" name="dob" placeholder="dd/mm/yyyy" value="{{ old('dob') }}" required
                           class="w-full px-6 py-4 border border-gray-300 rounded-xl text-lg focus:outline-none focus:ring-4 focus:ring-yellow-400">
                    @error('dob')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="w-full bg-yellow-400 text-black py-4 rounded-xl text-xl font-bold hover:bg-yellow-500 transition shadow-xl">
                    Register
                </button>
            </form>

            <p class="text-center mt-8 text-gray-600">
                Sudah punya akun? <a href="{{ route('login') }}" class="text-yellow-600 hover:underline font-medium">Login</a>
            </p>
        </div>
    </div>
@endsection