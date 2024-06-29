<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Band;

class BandController extends Controller
{
    public function band()
    {
        $bands = Band::all();
        return view('band.index', compact('bands'));
    }

    public function create()
    {
        return view('band.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:3072' // 3MB = 3072KB
        ]);

        $path = $request->file('gambar')->store('band', 'public');
        $filename = basename($path);

        Band::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'gambar' => $filename,
        ]);

        return redirect()->route('band')->with('success', 'band added successfully.');
    }

    public function editBand($id)
    {
        $band = Band::find($id);
        if (!$band) {
            return redirect()->route('band')->with('error', 'band not found.');
        }
        return view('band.edit', compact('band'));
    }

    public function updateBand(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:3072', // Optional, 3MB = 3072KB
        ]);

        $band = Band::find($id);
        if (!$band) {
            return redirect()->route('band')->with('error', 'band not found.');
        }

        $band->nama = $request->nama;
        $band->deskripsi = $request->deskripsi;
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('band', 'public');
            $filename = basename($path);
            $band->gambar = $filename;
        }
        $band->save();

        return redirect()->route('band')->with('success', 'band updated successfully.');
    }

    public function deleteBand($id)
    {
        $band = Band::find($id);
        $band->delete();
        return redirect()->route('band')->with('success', 'band deleted successfully.');
    }
}
