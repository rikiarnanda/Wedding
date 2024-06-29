<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Konsep;


class KonsepController extends Controller
{

    public function konsep()
    {
        $konseps = Konsep::all();
        return view('konsep.index', compact('konseps'));
    }

    public function create()
    {
        return view('konsep.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:3072' // 3MB = 3072KB
        ]);

        $path = $request->file('gambar')->store('konsep', 'public');
        $filename = basename($path);

        Konsep::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'gambar' => $filename,
        ]);

        return redirect()->route('konsep')->with('success', 'konsep added successfully.');
    }

    public function editKonsep($id)
    {
        $konsep = Konsep::find($id);
        if (!$konsep) {
            return redirect()->route('konsep')->with('error', 'konsep not found.');
        }
        return view('konsep.edit', compact('konsep'));
    }

    public function updateKonsep(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:3072', // Optional, 3MB = 3072KB
        ]);

        $konsep = Konsep::find($id);
        if (!$konsep) {
            return redirect()->route('konsep')->with('error', 'konsep not found.');
        }

        $konsep->nama = $request->nama;
        $konsep->deskripsi = $request->deskripsi;
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('konsep', 'public');
            $filename = basename($path);
            $konsep->gambar = $filename;
        }
        $konsep->save();

        return redirect()->route('konsep')->with('success', 'konsep updated successfully.');
    }

    public function deleteKonsep($id)
    {
        $konsep = Konsep::find($id);
        $konsep->delete();
        return redirect()->route('konsep')->with('success', 'konsep deleted successfully.');
    }
}
