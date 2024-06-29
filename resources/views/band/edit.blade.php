@extends('layouts.app')

@section('content')
<div class="w-full bg-gray-50 h-screen px-10 py-32">
    <h1 class="text-xl font-bold mb-4 text-gray-600 text-center">Edit Band</h1>
    <div class="flex justify-center gap-3">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Masukkan nama" value="{{ $crew->nama }}" required>
            </div>
            <div class="mb-4">
                <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
                <textarea type="text" name="deskripsi" id="deskripsi" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="" value="{{ $crew->posisi }}" required>
            </div>
            <div class="form-group">
                <label for="link_gbr">Gambar:</label>
                <input type="file" class="form-control" id="link_gbr" name="link_gbr">
                <!-- Menampilkan URL gambar sebagai teks -->
                <p>URL Gambar: </p>
            </div>
            <div>
                <button type="submit" class="inline-block px-4 py-3 bg-amber-400 hover:bg-amber-300 rounded-lg w-full text-sm text-white">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection