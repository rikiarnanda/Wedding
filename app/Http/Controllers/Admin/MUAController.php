<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MUA;

class MUAController extends Controller
{
    public function mua()
    {
        $muas = MUA::all();
        return view('mua.index', compact('muas'));
    }

    public function create()
    {
        return view('mua.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:3072' // 3MB = 3072KB
        ]);

        $path = $request->file('gambar')->store('mua', 'public');
        $filename = basename($path);

        MUA::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'gambar' => $filename,
        ]);

        return redirect()->route('mua')->with('success', 'mua added successfully.');
    }

    public function editMUA($id)
    {
        $mua = MUA::find($id);
        if (!$mua) {
            return redirect()->route('mua')->with('error', 'mua not found.');
        }
        return view('mua.edit', compact('mua'));
    }

    public function updateMUA(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:3072', // Optional, 3MB = 3072KB
        ]);

        $mua = MUA::find($id);
        if (!$mua) {
            return redirect()->route('mua')->with('error', 'mua not found.');
        }

        $mua->nama = $request->nama;
        $mua->deskripsi = $request->deskripsi;
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('mua', 'public');
            $filename = basename($path);
            $mua->gambar = $filename;
        }
        $mua->save();

        return redirect()->route('mua')->with('success', 'mua updated successfully.');
    }

    public function deleteMUA($id)
    {
        $mua = MUA::find($id);
        $mua->delete();
        return redirect()->route('mua')->with('success', 'mua deleted successfully.');
    }
}
