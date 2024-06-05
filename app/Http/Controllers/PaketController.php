<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Vendor;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function paket()
    {
        $pakets = Paket::all();
        return view('paket.table', compact('pakets'));
    }

    public function create()
    {
        $vendors = Vendor::all();
        return view('paket.create', compact('vendors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_paket' => 'required',
            'gbr_paket' => 'required|image|mimes:jpeg,png,jpg|max:3072', // Validasi file gambar
            'detail' => 'required',
            'harga' => 'required',
            'vendor_id' => 'required|exists:vendors,id'
        ]);

        $paket = new Paket;
        $paket->nama_paket = $request->nama_paket;
        $paket->detail = $request->detail;
        $paket->harga = $request->harga;
        $paket->vendor_id = $request->vendor_id;

        if ($request->hasFile('gbr_paket')) {
            $file = $request->file('gbr_paket');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $targetPath = storage_path('app/public/paket'); // Menggunakan storage path
            $file->move($targetPath, $filename); // Memindahkan file
            $paket->gbr_paket = 'storage/paket/' . $filename; // Menyimpan path relatif yang benar
        }

        $paket->save();

        return redirect()->route('paket')->with('success', 'Paket created successfully.');
    }

    public function edit($id)
    {
        $paket = Paket::find($id);
        $vendors = Vendor::all(); // Get all vendors for dropdown in form
        if (!$paket) {
            return redirect()->route('paket')->with('error', 'Paket not found.');
        }
        return view('paket.edit', compact('paket', 'vendors'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_paket' => 'required',
            'gbr_paket' => 'sometimes|image|mimes:jpeg,png,jpg|max:3072', // Validasi file gambar hanya jika file baru diupload
            'detail' => 'required',
            'harga' => 'required',
            'vendor_id' => 'required|exists:vendors,id'
        ]);

        $paket = Paket::find($id);
        if (!$paket) {
            return redirect()->route('paket')->with('error', 'Paket not found.');
        }

        $paket->nama_paket = $request->nama_paket;
        $paket->detail = $request->detail;
        $paket->harga = $request->harga;
        $paket->vendor_id = $request->vendor_id;

        if ($request->hasFile('gbr_paket')) {
            $file = $request->file('gbr_paket');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $targetPath = storage_path('app/public/paket'); // Menggunakan storage path
            $file->move($targetPath, $filename); // Memindahkan file
            $paket->gbr_paket = 'storage/paket/' . $filename; // Menyimpan path relatif yang benar
        }

        $paket->save();

        return redirect()->route('paket')->with('success', 'Paket updated successfully.');
    }

    public function destroy(Paket $paket, $id)
    {
        $paket = Paket::find($id);
        $paket->delete();
        return redirect()->route('paket')->with('success', 'Paket deleted successfully.');
    }
}
