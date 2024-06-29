@extends('layouts.app2')

@section('title', 'Order')

@section('content')
<div class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="max-w-md w-full bg-white rounded-lg shadow-md overflow-hidden">
        <div class="p-4">
            <img class="w-full h-48 object-cover" src="{{ asset('images/hero.jpg')}}" alt="Product Image">
            <h2 class="text-xl font-semibold text-gray-900 mt-4">Nama Paket Wedding 1</h2>
            <span class="bg-amber-400 text-black text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">Status</span>
            <div class="mt-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="estimated-month">Bulan Perkiraan</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="estimated-month" type="text" placeholder="Pilih Bulan">
            </div>
            <div class="mt-6 flex justify-center">
                <button class="w-full bg-amber-400 hover:bg-amber-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    Order
                </button>
            </div>
        </div>
    </div>
</div>
@endsection