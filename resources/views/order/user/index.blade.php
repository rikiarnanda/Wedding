@extends('layouts.app2')

@section('title', 'Order')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-8 text-center text-amber-500">Daftar Orderan Anda</h1>
    <div class="flex flex-row overflow-hidden justify-center gap-3">
        @foreach ($orders as $order)
        <div class="w-fit flex flex-row gap-2 border rounded-lg p-4 text-left bg-white shadow-lg hover:shadow-xl transition-shadow duration-300 transform hover:scale-105">
            <img src="{{ asset($order->paket->gbr_paket) }}" alt="{{ $order->paket->nama_paket }}" class="w-[150px] h-[100px] object-cover object-top">
            <div class="flex flex-col justify-start items-startr">
                <h2 class="text-xl font-semibold text-amber-500">{{ $order->paket->nama_paket }}</h2>
                <span class="bg-amber-400 text-black text-xs font-semibold p-1 w-fit rounded">{{ $order->status }}</span>
                @if ($order->status == 'Orderan Diterima')
                <div class="mt-2">
                    <p class="text-gray-500 text-sm mb-2">Screenshot orderan dan kirim ke telegram</p>
                    <a href="https://t.me/omy_bot_wedding" class="bg-amber-300 font-semibold hover:bg-amber-400 px-3 py-2 rounded-md my-2">Chat Admin</a>
                </div>
                @endif
            </div>

        </div>
        @endforeach
    </div>
</div>
@endsection