@extends('layouts.app')

@section('content')
<div class="w-full bg-gray-50 h-screen px-10 py-32">
    <h1 class="text-xl font-bold mb-4 text-gray-600 text-center">Tambah Vendor</h1>
    <div class="flex justify-center gap-3">
        <form action="#" method="POST" class="w-full max-w-xl">
            <div class="mb-4">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama Vendor</label>
                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Masukkan nama vendor" required>
            </div>
            <div class="mb-4">
                <label for="gambar" class="block mb-2 text-sm font-medium text-gray-900">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 file:px-3 py-2 " placeholder="Masukkan email vendor" required>
            </div>
            <div class="mb-4">
                <label for="lokasi" class="block mb-2 text-sm font-medium text-gray-900">Lokasi</label>
                <input type="text" name="lokasi" id="lokasi" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Masukkan lokasi vendor" required>
            </div>
            <div>
                <button type="submit" id="btn-tambah-vendor" class="inline-block px-4 py-3 bg-amber-400 hover:bg-amber-300 rounded-lg w-full text-sm text-white">Tambah Vendor</button>
            </div>
        </form>
    </div>
</div>
@endsection