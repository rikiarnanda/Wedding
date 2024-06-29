@extends('layouts.app2')

@section('title', 'Vendor')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-8 text-center text-amber-500">Vendor Kami</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        @foreach ($vendors as $vendor)
            <div class="border rounded-lg p-4 text-center bg-white shadow-lg hover:shadow-xl transition-shadow duration-300 transform hover:scale-105">
                <div class="h-48 overflow-hidden rounded-lg mb-4">
                    <img src="{{ Storage::url($vendor->gambar) }}" alt="{{ $vendor->nama_vendor }}" class="w-full h-full object-cover">
                </div>
                <h2 class="text-xl font-semibold text-amber-500">{{ $vendor->nama_vendor }}</h2>
                <p class="text-gray-700 mb-4">{{ $vendor->lokasi }}</p>
                <button class="mt-4 bg-amber-500 text-white px-4 py-2 rounded hover:bg-amber-600 transition-colors duration-300">Booking Sekarang</button>
            </div>
        @endforeach
    </div>
</div>
@endsection
