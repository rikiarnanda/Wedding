<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dekorasi;

class DekorasiController extends Controller
{
    public function dekorasi()
    {
        $dekorasis = Dekorasi::all();
        return view('dekorasi.index', compact('dekorasis'));
    }

    public function create()
    {
        return view('dekorasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:3072' // 3MB = 3072KB
        ]);

        $path = $request->file('gambar')->store('dekorasi', 'public');
        $filename = basename($path);

        Dekorasi::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'gambar' => $filename,
        ]);

        return redirect()->route('dekorasi')->with('success', 'dekorasi added successfully.');
    }

    public function editDekorasi($id)
    {
        $dekorasi = Dekorasi::find($id);
        if (!$dekorasi) {
            return redirect()->route('dekorasi')->with('error', 'dekorasi not found.');
        }
        return view('dekorasi.edit', compact('dekorasi'));
    }

    public function updateDekorasi(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:3072', // Optional, 3MB = 3072KB
        ]);

        $dekorasi = Dekorasi::find($id);
        if (!$dekorasi) {
            return redirect()->route('dekorasi')->with('error', 'dekorasi not found.');
        }

        $dekorasi->nama = $request->nama;
        $dekorasi->deskripsi = $request->deskripsi;
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('dekorasi', 'public');
            $filename = basename($path);
            $dekorasi->gambar = $filename;
        }
        $dekorasi->save();

        return redirect()->route('dekorasi')->with('success', 'dekorasi updated successfully.');
    }

    public function deleteDekorasi($id)
    {
        $dekorasi = Dekorasi::find($id);
        $dekorasi->delete();
        return redirect()->route('dekorasi')->with('success', 'dekorasi deleted successfully.');
    }
}
