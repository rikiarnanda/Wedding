<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mc;

class McController extends Controller
{
    public function mc()
    {
        $mcs = Mc::all();
        return view('mc.index', compact('mcs'));
    }

    public function create()
    {
        return view('mc.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:3072' // 3MB = 3072KB
        ]);

        $path = $request->file('gambar')->store('mc', 'public');
        $filename = basename($path);

        Mc::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'gambar' => $filename,
        ]);

        return redirect()->route('mc')->with('success', 'mc added successfully.');
    }

    public function editMc($id)
    {
        $mc = Mc::find($id);
        if (!$mc) {
            return redirect()->route('mc')->with('error', 'mc not found.');
        }
        return view('mc.edit', compact('mc'));
    }

    public function updateMc(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:3072', // Optional, 3MB = 3072KB
        ]);

        $mc = Mc::find($id);
        if (!$mc) {
            return redirect()->route('mc')->with('error', 'mc not found.');
        }

        $mc->nama = $request->nama;
        $mc->deskripsi = $request->deskripsi;
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('mc', 'public');
            $filename = basename($path);
            $mc->gambar = $filename;
        }
        $mc->save();

        return redirect()->route('mc')->with('success', 'mc updated successfully.');
    }

    public function deleteMc($id)
    {
        $mc = Mc::find($id);
        $mc->delete();
        return redirect()->route('mc')->with('success', 'mc deleted successfully.');
    }
}