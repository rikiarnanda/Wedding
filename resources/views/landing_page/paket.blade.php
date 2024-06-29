@extends('layouts.app2')

@section('title', 'Paket')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-8 text-center text-amber-500">Paket Kami</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($pakets as $paket)
            <div class="border rounded-lg p-4 text-center bg-white shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="h-48 overflow-hidden rounded-lg mb-4">
                    <img src="{{ asset($paket->gbr_paket) }}" alt="{{ $paket->nama_paket }}" class="w-full h-full object-cover">
                </div>
                <h2 class="text-xl font-semibold text-amber-500">{{ $paket->nama_paket }}</h2>
                <ul class="text-gray-600">
                    @foreach(explode(',', $paket->detail) as $detail)
                    <li class="flex justify-between items-center">
                        <span class="mr-2">{{ $detail }}</span>
                        <svg class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </li>
                    @endforeach
                </ul>
                <p class="text-gray-700 font-bold mb-4">{{ $paket->harga }}</p>
                <button class="mt-4 bg-amber-500 text-white px-4 py-2 rounded hover:bg-amber-600 transition-colors duration-300">Booking Sekarang</button>
            </div>
        @endforeach
    </div>
</div>
@endsection
