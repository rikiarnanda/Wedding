@extends('layouts.app')

@section('content')
<div class="w-full bg-gray-50 h-screen px-10 py-32">
    <h1 class="text-xl font-bold mb-4 text-gray-600 text-center">Tambah MC</h1>
    <div class="flex justify-center gap-3">
        <form action="{{ route('mc.store') }}" enctype="multipart/form-data" method="POST" class="w-full max-w-xl">
            @csrf
            <div class="mb-4">
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama MC</label>
                <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Masukkan nama" required>
            </div>
            <div class="mb-4">
                <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Masukkan deskripsi" required></textarea>
            </div>
            <div class="mb-4">
                <label for="gambar" class="block mb-2 text-sm font-medium text-gray-900">Gambar</label>
                <input type="file" name="gambar" id="gambar" accept=".jpg,.jpeg,.png" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 file:px-3 py-2" required>
            </div>
            <div>
                <button type="submit" class="inline-block px-4 py-3 bg-amber-400 hover:bg-amber-300 rounded-lg w-full text-sm text-white">Tambah</button>
            </div>
        </form>
    </div>
</div>
@endsection