@extends('layouts.app')

@section('content')
<div class="w-full bg-gray-50 h-screen px-10 py-32">
    <h1 class="text-xl font-bold mb-4 text-gray-600 text-center">Edit Status Orderan</h1>
    <div class="flex justify-center gap-3">
        <form action="{{ route('admin.orders.update_status', ['id' => $order->id]) }}" enctype="multipart/form-data" method="POST" class="w-full max-w-xl">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="status" class="block mb-2 text-sm font-medium text-gray-900">Status Orderan</label>
                <select type="status" name="status" id="nama" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Masukkan nama" required>
                    <option value="1">Menunggu Konfirmasi</option>
                    <option value="2">Orderan Diterima</option>
                    <option value="3">Orderan Ditolak</option>
                    <option value="4">Orderan Selesai</option>
                </select>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Simpan Perubahan</button>
        </form>
    </div>
</div>
@endsection