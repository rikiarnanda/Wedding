<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Paket;
use App\Models\User;


class OrderController extends Controller
{
    //admin
    public function orderAdmin()
    {
        $orders = Order::all();
        return view('order.admin.index', compact('orders'));
    }

    public function editStatus($id)
    {
        $order = Order::findOrFail($id);
        return view('order.admin.edit', compact('orders'));
    }

    public function updateStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        
        // Validasi input status
        $request->validate([
            'status' => 'required|in:1,2,3,4', // Sesuaikan dengan nilai yang diperlukan
        ]);

        // Mapping nilai status ke teks sesuai opsi di view
        $statusLabels = [
            '1' => 'Menunggu Konfirmasi',
            '2' => 'Orderan Diterima',
            '3' => 'Orderan Ditolak',
            '4' => 'Orderan Selesai',
        ];

        // Update status order
        $order->status = $statusLabels[$request->status];
        $order->save();

        return redirect()->back()->with('success', 'Status order berhasil diperbarui.');
    }

    //user
    public function orderUser()
    {
        $orders = auth()->user()->orders;
        return view('order.user.index', compact('orders'));
    }

    public function create()
    {
        return view('order.user.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'paket_id' => 'required',
            'bulan' => 'required',
        ]);

        // Buat order baru dengan status default 'Menunggu Konfirmasi'
        $order = new Order();
        $order->user_id = auth()->id();
        $order->paket_id = $request->paket_id;
        $order->bulan = $request->bulan;
        $order->status = 'Menunggu Konfirmasi';
        $order->save();

        return redirect()->route('user.orders.index')->with('success', 'Order berhasil dibuat.');
    }
}
