@extends('layouts.app')

@section('content')
<div class="w-full bg-gray-50 h-screen px-10 py-32">
    <h1 class="text-xl font-bold mb-4 text-gray-600 text-center">Tambah Testimoni</h1>
    <div class="flex justify-center gap-3">
        <form action="{{ route('testimoni.store') }}" method="POST" enctype="multipart/form-data" class="w-full max-w-xl">
            @csrf
            <div class="mb-4">
                <label for="testimoni" class="block mb-2 text-sm font-medium text-gray-900">Testimoni</label>
                <input type="text" name="testimoni" id="testimoni" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Masukkan testimoni" required>
            </div>
            <div class="mb-4">
                <label for="paket_id" class="block mb-2 text-sm font-medium text-gray-900">Nama Paket</label>
                <select name="paket_id" id="paket_id" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    <option value="">Pilih Paket</option>
                    @foreach ($pakets as $pak)
                        <option value="{{ $pak->id }}">{{ $pak->nama_paket }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <button type="submit" class="inline-block px-4 py-3 bg-amber-400 hover:bg-amber-300 rounded-lg w-full text-sm text-white">Tambah</button>
            </div>
        </form>
    </div>
</div>
@endsection