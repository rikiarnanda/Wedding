@extends('layouts.guest')

@section('content')
<div class="w-full max-w-md bg-white p-10 rounded-md shadow-lg flex flex-col justify-center items-center mx-auto">
    <h1 class="text-xl font-semibold text-center">Selamat Datang!</h1>
    <p>Belum Punya Akun? <a href="{{ route('register') }}" class="text-amber-400 font-medium hover:text-amber-300">Register</a></p>
    <form method="POST" action="{{ route('login') }}" class="w-full max-w-md">
        @csrf
        <div class="mb-3">
            <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
            <input id="username" type="text" name="username" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>
        <div class="mb-3">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
            <input id="password" type="password" name="password" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>
        <button type="submit" class="px-4 py-3 bg-amber-500 justify-end rounded-lg hover:bg-amber-400 w-full text-sm text-white">Log In</button>
    </form>
</div>
@endsection