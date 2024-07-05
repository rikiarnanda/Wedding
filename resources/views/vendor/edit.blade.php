@extends('layouts.app')

@section('content')
<div class="w-full bg-gray-50 h-screen px-10 py-32 ">
    <h1 class="text-xl font-bold mb-4 text-gray-600 text-center">Edit Vendor</h1>
    <div class="flex justify-center gap-3">
        <form action="{{ route('vendor.update', $vendor->id) }}" method="POST" enctype="multipart/form-data" class="w-full max-w-xl">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nama_vendor" class="block mb-2 text-sm font-medium text-gray-900">Nama Vendor</label>
                <input type="text" name="nama_vendor" id="nama_vendor" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{ $vendor->nama_vendor }}" required>
            </div>
            <div class="form-group">
                <label for="gambar">Gambar:</label>
                <input type="file" class="form-control" id="gambar" name="gambar">
                <!-- Menampilkan URL gambar sebagai teks -->
                <p>URL Gambar: {{ Storage::url($vendor->gambar) }}</p>
            </div>
            <div class="mb-4">
                <label for="lokasi" class="block mb-2 text-sm font-medium text-gray-900">Lokasi</label>
                <input type="text" name="lokasi" id="lokasi" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{ $vendor->lokasi }}" required>
            </div>
            <div>
                <!-- Adjusted focus state styling -->
                <button type="submit" class="px-4 py-3 bg-amber-400 rounded-lg hover:bg-amber-300 w-full text-sm text-white mb-4">Simpan</button>
            </div>
            <div class="mt-4 flex justify-center items-center">
                <a href="{{ route('vendor') }}" class="px-4 py-3 bg-amber-400 rounded-lg hover:bg-amber-300 w-full text-sm text-center text-white hover:text-black hover:font-bold hover:shadow-md">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection