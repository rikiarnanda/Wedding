<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokumentasi;


class DokumentasiController extends Controller
{
    public function dokumentasi()
    {
        $dokumentasis = Dokumentasi::all();
        return view('dokumentasi.index', compact('dokumentasis'));
    }

    public function create()
    {
        return view('dokumentasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:3072' // 3MB = 3072KB
        ]);

        $path = $request->file('gambar')->store('dokumentasi', 'public');
        $filename = basename($path);

        Dokumentasi::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'gambar' => $filename,
        ]);

        return redirect()->route('dokumentasi')->with('success', 'dokumentasi added successfully.');
    }

    public function editDokumentasi($id)
    {
        $dokumentasi = Dokumentasi::find($id);
        if (!$dokumentasi) {
            return redirect()->route('dokumentasi')->with('error', 'dokumentasi not found.');
        }
        return view('dokumentasi.edit', compact('dokumentasi'));
    }

    public function updateDokumentasi(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:3072', // Optional, 3MB = 3072KB
        ]);

        $dokumentasi = Dokumentasi::find($id);
        if (!$dokumentasi) {
            return redirect()->route('dokumentasi')->with('error', 'dokumentasi not found.');
        }

        $dokumentasi->nama = $request->nama;
        $dokumentasi->deskripsi = $request->deskripsi;
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('dokumentasi', 'public');
            $filename = basename($path);
            $dokumentasi->gambar = $filename;
        }
        $dokumentasi->save();

        return redirect()->route('dokumentasi')->with('success', 'dokumentasi updated successfully.');
    }

    public function deleteDokumentasi($id)
    {
        $dokumentasi = Dokumentasi::find($id);
        $dokumentasi->delete();
        return redirect()->route('dokumentasi')->with('success', 'dokumentasi deleted successfully.');
    }
}
