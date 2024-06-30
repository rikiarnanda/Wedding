@extends('layouts.app2')

@section('title', 'Order')

@section('content')
<div class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="max-w-md w-full bg-white rounded-lg shadow-md overflow-hidden">
        <div class="p-4">
            <img src="{{ asset($paket->gbr_paket) }}" alt="{{ $paket->nama_paket }}" class="w-full h-full object-cover">
            <h2 class="text-xl font-semibold text-gray-900 mt-4">{{ $paket->nama_paket }}</h2>
            <span class="bg-amber-400 text-black text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">{{ $paket->status }}</span>
            <form action="{{ route('user.orders.store') }}" method="POST">
                @csrf
                <input type="hidden" name="paket_id" value="{{ $paket->id }}">
                <div class="mt-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="estimated-month">Bulan Perkiraan</label>
                    <input name="bulan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="estimated-month" type="text" placeholder="Pilih Bulan">
                </div>
                <div class="mt-6 flex justify-center">
                    <button type="submit" class="w-full bg-amber-400 hover:bg-amber-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Order
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection