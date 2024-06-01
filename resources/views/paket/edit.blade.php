@extends('layouts.app')

@section('content')
<div class="w-full bg-gray-50 h-screen px-10 py-32">
    <h1 class="text-xl font-bold mb-4 text-gray-600 text-center">Edit Paket</h1>
    <div class="flex justify-center gap-3">
        <form action="#" method="POST" class="w-full max-w-xl">
            <div class="mb-4">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama Paket</label>
                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Masukkan nama vendor" required>
            </div>
            <div class="mb-4">
                <label for="detail" class="block mb-2 text-sm font-medium text-gray-900">Detail</label>
                <input type="text" name="detail" id="detail" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Masukkan nama vendor" required>
            </div>
            <div class="mb-4">
                <label for="harga" class="block mb-2 text-sm font-medium text-gray-900">Harga</label>
                <input type="text" name="harga" id="harga" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Masukkan lokasi vendor" required>
            </div>
            <div class="mb-4">
                <label for="vendor" class="block mb-2 text-sm font-medium text-gray-900">Nama Vendor</label>
                <input type="text" name="vendor" id="vendor" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Masukkan lokasi vendor" required>
            </div>
            <div>
                <button type="submit" class="inline-block px-4 py-3 bg-amber-400 hover:bg-amber-300 rounded-lg w-full text-sm text-white">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection