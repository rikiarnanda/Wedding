<!-- View: landing_page/vendor.blade.php -->
@extends('layouts.app2')

@section('title', 'Vendor')

@section('content')
<div class="container bg-gray-50 mx-auto py-8">
    <h1 class="animate__animated animate__fadeInUp text-3xl font-bold mb-8 text-center text-amber-500">Vendor Kami</h1>

    {{-- First row: Vendors --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8 justify-center">
        @foreach ($vendors as $vendor)
        <div class="animate__animated animate__fadeInUp border rounded-lg p-4 text-center bg-white shadow-lg hover:shadow-xl transition-shadow duration-300 transform hover:scale-105">
            <div class="h-48 overflow-hidden rounded-lg mb-4">
                <img src="{{ Storage::url('vendor/' . $vendor->gambar) }}" alt="{{ $vendor->nama_vendor }}" class="w-full h-full object-cover">
            </div>
            <h2 class="text-xl font-semibold text-amber-500">{{ $vendor->nama_vendor }}</h2>
            <p class="text-gray-700 mb-4">{{ $vendor->lokasi }}</p>
            <p class="text-center">{{ $vendor->deskripsi }}</p>
        </div>
        @endforeach
    </div>

    <div class="grid flex flex flex-col gap-8">  
        <h1 class="animate__animated animate__fadeInUp text-3xl font-semibold my-3 text-center text-amber-500">Band</h1>
        <div class="flex flex-row overflow-hidden justify-center gap-8">
            @foreach ($bands as $band)
            <div class="border rounded-lg p-4 text-center bg-white shadow-lg hover:shadow-xl transition-shadow duration-300 transform hover:scale-105">
                <h2 class="text-xl font-semibold text-amber-500">{{ $band->nama }}</h2>
                <div class="h-48 overflow-hidden rounded-lg my-4">
                    <img src="{{ Storage::url('band/' . $band->gambar) }}" alt="{{ $band->nama }}" class="w-[300px] h-full shadow-md object-cover center 80%">
                </div>
                <p class="text-center w-[300px]">{{ $band->deskripsi }}</p>
            </div>
            @endforeach
        </div>

        <h1 class="text-3xl font-semibold my-3 text-center text-amber-500">Konsep</h1>
        <div class="flex flex-row overflow-hidden justify-center gap-8">
            @foreach ($konseps as $konsep)
            <div class="border rounded-lg p-4 text-center bg-white shadow-lg hover:shadow-xl transition-shadow duration-300 transform hover:scale-105">
                <h2 class="text-xl font-semibold text-amber-500">{{ $konsep->nama }}</h2>
                <div class="h-48 overflow-hidden rounded-lg my-4">
                    <img src="{{ Storage::url('konsep/' . $konsep->gambar) }}" alt="{{ $konsep->nama }}" class="w-[450px] h-full shadow-md object-cover center 80%">
                </div>
                <p class="text-center w-[450px]">{{ $konsep->deskripsi }}</p>
            </div>
            @endforeach
        </div>

        <h1 class="text-3xl font-semibold my-3 text-center text-amber-500">Dekorasi</h1>
        <div class="flex flex-row overflow-hidden justify-center gap-8">
            @foreach ($dekorasi as $dekor)
            <div class="border rounded-lg p-4 text-center bg-white shadow-lg hover:shadow-xl transition-shadow duration-300 transform hover:scale-105">
                <h2 class="text-xl font-semibold text-amber-500">{{ $dekor->nama }}</h2>
                <div class="h-48 overflow-hidden rounded-lg mb-4">
                    <img src="{{ Storage::url('dekorasi/' . $dekor->gambar) }}" alt="{{ $dekor->nama }}" class="w-[400px] h-full object-cover center 80%">
                </div>
                <ul class="text-left w-[400px] mt-2">
                    @php
                    // Split the deskripsi into separate items
                    $items = preg_split('/[\.,]/', $dekor->deskripsi, -1, PREG_SPLIT_NO_EMPTY);
                    @endphp
                    @foreach ($items as $item)
                    <li>{{ trim($item) }}</li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>

        <h1 class="text-3xl font-semibold my-3 text-center text-amber-500">Dokumentasi</h1>
        <div class="flex flex-row overflow-hidden justify-center gap-8">
            @foreach ($dokumentasi as $dokumen)
            <div class="border rounded-lg p-4 text-center bg-white shadow-lg hover:shadow-xl transition-shadow duration-300 transform hover:scale-105">
                <h2 class="text-xl font-semibold text-amber-500">{{ $dokumen->nama }}</h2>
                <div class="h-48 overflow-hidden rounded-lg mb-4">
                    <img src="{{ Storage::url('dokumentasi/' . $dokumen->gambar) }}" alt="{{ $dokumen->nama }}" class="w-full h-full object-cover object-center">
                </div>
                <p class="text-center w-[450px]">{{ $dokumen->deskripsi }}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>