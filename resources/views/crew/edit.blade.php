@extends('layouts.app')

@section('content')
<div class="w-full bg-gray-50 h-screen px-10 py-32">
    <h1 class="text-xl font-bold mb-4 text-gray-600 text-center">Edit Crew</h1>
    <div class="flex justify-center gap-3">
        <form action="{{ route('crew.update', $crew->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Masukkan nama" value="{{ $crew->nama }}" required>
            </div>
            <div class="form-group">
                <label for="link_gbr">Gambar:</label>
                <input type="file" class="form-control" id="link_gbr" name="link_gbr" accept=".jpg,.jpeg,.png">
                <!-- Menampilkan URL gambar sebagai teks -->
                <p>URL Gambar: {{ Storage::url($crew->link_gbr) }}</p>
            </div>
            <div class="mb-4">
                <label for="posisi" class="block mb-2 text-sm font-medium text-gray-900">Posisi</label>
                <input type="text" name="posisi" id="posisi" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="" value="{{ $crew->posisi }}" required>
            </div>
            <div class="mb-4">
                <label for="vendor_id" class="block mb-2 text-sm font-medium text-gray-900">Nama Vendor</label>
                <select name="vendor_id" id="vendor_id" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    <option value="">Pilih Vendor</option>
                    @foreach ($vendors as $vendor)
                        <option value="{{ $vendor->id }}" {{ $vendor->id == $crew->vendor_id ? 'selected' : '' }}>{{ $vendor->nama_vendor }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <button type="submit" class="inline-block px-4 py-3 bg-amber-400 hover:bg-amber-300 rounded-lg w-full text-sm text-white mb-4">Simpan</button>
            </div>
            <div class="mt-4 flex justify-center items-center">
                <a href="{{ route('crew') }}" class="px-4 py-3 bg-amber-400 rounded-lg hover:bg-amber-300 w-full text-sm text-center text-white hover:text-black hover:font-bold hover:shadow-md">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection