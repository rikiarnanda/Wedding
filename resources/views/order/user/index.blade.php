@extends('layouts.app2')

@section('title', 'Order')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-8 text-center text-amber-500">Daftar Orderan Anda</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        @foreach ($orders as $order)
        <div class="border rounded-lg p-4 text-center bg-white shadow-lg hover:shadow-xl transition-shadow duration-300 transform hover:scale-105">
            <div class="flex items-center justify-center h-24 mb-4">
                <img src="{{ asset($order->gambar) }}" alt="{{ $order->nama }}" class="w-16 h-16 object-cover rounded-full">
            </div>
            <h2 class="text-xl font-semibold text-amber-500">{{ $order->nama_paket }}</h2>
            <p class="text-gray-700 mb-4">{{ $order->deskripsi }}</p>

            @if ($order->status == 2)
            <!-- Jika status order '2' (Orderan Diterima) -->
            <div class="mt-4">
                <a href="#" class="bg-amber-300 font-semibold hover:bg-amber-400 px-4 py-2 rounded-md">Chat Admin</a>
                <p class="text-gray-500 text-sm mt-1">Screenshot orderan dan kirim ke tele</p>
            </div>
            @endif
        </div>
        @endforeach
    </div>
</div>
@endsection
