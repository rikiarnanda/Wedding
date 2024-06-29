@extends('layouts.app')

@section('content')
<div class="w-full bg-gray-50 min-h-screen px-10 py-10">
    <h1 class="text-xl font-bold mb-4 text-gray-600 text-center">Tambah Paket</h1>
    <div class="flex justify-center gap-3">
        <form action="{{ route('paket.store') }}" method="POST" enctype="multipart/form-data" class="w-full max-w-xl">
            @csrf
            <div class="mb-4">
                <label for="nama_paket" class="block mb-2 text-sm font-medium text-gray-900">Nama Paket</label>
                <input type="text" name="nama_paket" id="nama_paket" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Masukkan nama paket" required>
            </div>
            <div class="mb-4">
                <label for="nama_konsep" class="block mb-2 text-sm font-medium text-gray-900">Konsep</label>
                <select name="konsep_id" id="konsep_id" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    <option value="">Pilih Konsep</option>

                    <option value=""></option>
                </select>
            </div>
            <div class="mb-4">
                <label for="nama_band" class="block mb-2 text-sm font-medium text-gray-900">Band</label>
                <select name="band_id" id="band_id" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    <option value="">Pilih Band</option>

                    <option value=""></option>

                </select>
            </div>
            <div class="mb-4">
                <label for="gbr_paket" class="block mb-2 text-sm font-medium text-gray-900">Gambar</label>
                <input type="file" name="gbr_paket" id="gbr_paket" accept=".jpg,.jpeg,.png" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 file:px-3 py-2 " placeholder="Masukkan Gambar" required>
            </div>
            <div class="mb-4">
                <label for="nama_mua" class="block mb-2 text-sm font-medium text-gray-900">MUA</label>
                <select name="mua_id" id="mua_id" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    <option value="">Pilih MUA</option>

                    <option value=""></option>
                </select>
            </div>
            <div class="mb-4">
                <label for="nama_mc" class="block mb-2 text-sm font-medium text-gray-900">MC</label>
                <input type="text" name="nama_mc" id="nama_mc" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Masukkan nama mc" required>
            </div>
            <div class="mb-4">
                <label for="nama_dekorasi" class="block mb-2 text-sm font-medium text-gray-900">Pilih Dekorasi</label>
                <select name="dekorasi_id" id="dekorasi_id" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    <option value="">Pilih Dekorasi</option>

                    <option value=""></option>

                </select>
            </div>
            <div class="mb-4">
                <label for="nama_dokumentasi" class="block mb-2 text-sm font-medium text-gray-900">Pilih Dokumentasi</label>
                <select name="dokumentasi_id" id="dokumentasi_id" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    <option value="">Pilih Dokumentasi</option>

                    <option value=""></option>

                </select>
            </div>
            <div class="mb-4">
                <label for="harga" class="block mb-2 text-sm font-medium text-gray-900">Harga</label>
                <input type="text" name="harga" id="harga" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Masukkan harga paket" required>
            </div>
            <div class="mb-4">
                <label for="vendor_id" class="block mb-2 text-sm font-medium text-gray-900">Nama Vendor</label>
                <select name="vendor_id" id="vendor_id" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    <option value="">Pilih Vendor</option>
                    @foreach ($vendors as $vendor)
                    <option value="{{ $vendor->id }}">{{ $vendor->nama_vendor }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <button type="submit" class="inline-block px-4 py-3 bg-amber-400 hover:bg-amber-300 rounded-lg w-full text-sm text-white">Tambahr</button>
            </div>
        </form>
    </div>
</div>
@endsection