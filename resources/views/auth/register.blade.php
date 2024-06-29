@extends('layouts.guest')

@section('content')
<div class="w-full max-w-md bg-white p-10 rounded-md shadow-lg flex flex-col justify-center items-center mx-auto">
    <h1 class="text-xl font-semibold text-center">Selamat Datang Kembali!</h1>
    <p>Sudah Punya Akun? <a href="{{ route('login') }}" class="text-amber-400 font-medium hover:text-amber-300">Login</a></p>
    <form method="POST" action="{{ route('login') }}" class="w-full max-w-md">
        @csrf
        <div class="mb-3">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
            <input id="name" type="text" name="name" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
            <textarea id="alamat" type="text" name="alamat" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required></textarea>
        </div>
        <div class="mb-3">
            <label for="notelp" class="block mb-2 text-sm font-medium text-gray-900">No Yang Bisa Dihubungi</label>
            <input id="notelp" type="number" name="notelp" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>
        <div class="mb-3">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
            <input id="email" type="email" name="email" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>
        <div class="mb-3">
            <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
            <input id="username" type="text" name="username" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>
        <div class="mb-3">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
            <input id="password" type="password" name="password" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>
        <button type="submit" class="px-4 py-3 bg-amber-500 justify-end rounded-lg hover:bg-amber-400 w-full text-sm text-white">Daftar</button>
    </form>
</div>
@endsection