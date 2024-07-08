@extends('layouts.app')

@section('content')
<div class="w-full bg-gray-50 h-screen px-10 py-32">
    <h1 class="text-xl font-bold mb-4 text-gray-600 text-center">Edit Testimoni</h1>
    <div class="flex justify-center gap-3">
        <form action="{{ route('testimoni.update', $testimoni->id) }}" method="POST" enctype="multipart/form-data" class="w-full max-w-xl">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="testimoni" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
                <input type="text" name="testimoni" id="testimoni" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{ $testimoni->testimoni }}" required>
            </div>
        
            <div>
                <button type="submit" class="px-4 py-3 bg-amber-400 rounded-lg hover:bg-amber-300 w-full text-sm text-white">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection