@extends('layouts.app2')

@section('title', 'Crew')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-8 text-amber-500 text-center">Tim Wedding Organizer</h1>
    <div class="animate__animated animate__fadeInUp grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mx-auto overflow-hidden gap-8">
        @foreach ($crews as $crew)
        <div class="border rounded-lg p-4 text-center bg-white shadow-lg hover:shadow-xl transition-shadow duration-300">
            <div class="h-60 overflow-hidden rounded-lg mb-4 mt-4"> <!-- Menambahkan margin-top pada gambar -->
                <img src="{{ asset($crew->link_gbr) }}" alt="{{ $crew->nama }}" class="w-full h-full object-cover objectc-center">
            </div>
            <h2 class="text-xl font-semibold text-amber-500">{{ $crew->nama }}</h2>
            <p class="text-gray-700">{{ $crew->posisi }}</p>
        </div>
        @endforeach
    </div>
</div>
@endsection