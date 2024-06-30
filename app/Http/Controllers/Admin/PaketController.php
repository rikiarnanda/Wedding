<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Paket;
use App\Models\Vendor;
use App\Models\Konsep;
use App\Models\Band;
use App\Models\Mua;
use App\Models\Dekorasi;
use App\Models\Dokumentasi;
use App\Models\Mc;
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
        $konseps = Konsep::all();
        $bands = Band::all();
        $muas = Mua::all();
        $dekorasis = Dekorasi::all();
        $dokumentasis = Dokumentasi::all();
        $mcs = Mc::all();
        return view('paket.create', compact('vendors', 'konseps', 'bands', 'muas', 'dekorasis', 'dokumentasis', 'mcs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_paket' => 'required',
            'gbr_paket' => 'required|image|mimes:jpeg,png,jpg|max:3072', // Validasi file gambar
            'mc_id' => 'required|exists:mcs,id',
            'harga' => 'required',
            'vendor_id' => 'required|exists:vendors,id',
            'konsep_id' => 'required|exists:konseps,id',
            'band_id' => 'required|exists:bands,id',
            'mua_id' => 'required|exists:muas,id',
            'dekorasi_id' => 'required|exists:dekorasis,id',
            'dokumentasi_id' => 'required|exists:dokumentasis,id'
        ]);

        $paket = new Paket;
        $paket->nama_paket = $request->nama_paket;
        $paket->mc_id = $request->mc_id;
        $paket->harga = $request->harga;
        $paket->vendor_id = $request->vendor_id;
        $paket->konsep_id = $request->konsep_id;
        $paket->band_id = $request->band_id;
        $paket->mua_id = $request->mua_id;
        $paket->dekorasi_id = $request->dekorasi_id;
        $paket->dokumentasi_id = $request->dokumentasi_id;

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
        $vendors = Vendor::all();
        $konseps = Konsep::all();
        $bands = Band::all();
        $muas = Mua::all();
        $dekorasis = Dekorasi::all();
        $dokumentasis = Dokumentasi::all();
        $mcs = Mc::all();
        if (!$paket) {
            return redirect()->route('paket')->with('error', 'Paket not found.');
        }
        return view('paket.edit', compact('paket', 'vendors', 'konseps', 'bands', 'muas', 'dekorasis', 'dokumentasis', 'mcs'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_paket' => 'required',
            'gbr_paket' => 'sometimes|image|mimes:jpeg,png,jpg|max:3072', // Validasi file gambar hanya jika file baru diupload
            'mc_id' => 'required|exists:mcs,id',
            'harga' => 'required',
            'vendor_id' => 'required|exists:vendors,id',
            'konsep_id' => 'required|exists:konseps,id',
            'band_id' => 'required|exists:bands,id',
            'mua_id' => 'required|exists:muas,id',
            'dekorasi_id' => 'required|exists:dekorasis,id',
            'dokumentasi_id' => 'required|exists:dokumentasis,id'
        ]);

        $paket = Paket::find($id);
        if (!$paket) {
            return redirect()->route('paket')->with('error', 'Paket not found.');
        }

        $paket->nama_paket = $request->nama_paket;
        $paket->mc_id = $request->mc_id;
        $paket->harga = $request->harga;
        $paket->vendor_id = $request->vendor_id;
        $paket->konsep_id = $request->konsep_id;
        $paket->band_id = $request->band_id;
        $paket->mua_id = $request->mua_id;
        $paket->dekorasi_id = $request->dekorasi_id;
        $paket->dokumentasi_id = $request->dokumentasi_id;

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
