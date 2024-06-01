@extends('layouts.app')

@section('content')
<div class="w-full bg-gray-50 h-screen px-10 py-32">
    <h1 class="text-xl font-bold mb-4 text-gray-600 text-center">Tambah Crew</h1>
    <div class="flex justify-center gap-3">
        <form action="#" method="POST" class="w-full max-w-xl">
            <div class="mb-4">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama Crew</label>
                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Masukkan nama" required>
            </div>
            <div class="mb-4">
                <label for="gambar" class="block mb-2 text-sm font-medium text-gray-900">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 file:px-3 py-2 " placeholder="" required>
            </div>
            <div class="mb-4">
                <label for="posisi" class="block mb-2 text-sm font-medium text-gray-900">Posisi</label>
                <input type="text" name="posisi" id="posisi" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Masukkan posisi" required>
            </div>
            <div class="mb-4">
                <label for="vendor" class="block mb-2 text-sm font-medium text-gray-900">Nama Vendor</label>
                <input type="text" name="vendor" id="vendor" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="" required>
            </div>
            <div>
                <button type="submit" class="inline-block px-4 py-3 bg-amber-400 hover:bg-amber-300 rounded-lg w-full text-sm text-white">Tambahr</button>
            </div>
        </form>
    </div>
</div>
@endsection