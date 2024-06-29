<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Crew;
use App\Models\Vendor;

class CrewController extends Controller
{
    public function crew()
    {
        $crews = Crew::all();
        return view('crew.table', compact('crews'));
    }

    public function create()
    {
        $vendors = Vendor::all(); // Get all vendors for dropdown in form
        return view('crew.create', compact('vendors'));
    }

    /**
     * Store a newly created crew in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'link_gbr' => 'required|image|mimes:jpeg,png,jpg|max:3072', // Validasi file gambar
            'posisi' => 'required',
            'vendor_id' => 'required|exists:vendors,id'
        ]);

        $crew = new Crew;
        $crew->nama = $request->nama;
        $crew->posisi = $request->posisi;
        $crew->vendor_id = $request->vendor_id;

        if ($request->hasFile('link_gbr')) {
            $file = $request->file('link_gbr');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $targetPath = storage_path('app/public/crew'); // Menggunakan storage path
            $file->move($targetPath, $filename); // Memindahkan file
            $crew->link_gbr = 'storage/crew/' . $filename; // Menyimpan path relatif yang benar
        }

        $crew->save();

        return redirect()->route('crew')->with('success', 'Crew created successfully.');
    }

    /**
     * Show the form for editing the specified crew.
     */
    public function edit($id)
    {
        $crew = Crew::find($id);
        $vendors = Vendor::all(); // Get all vendors for dropdown in form
        if (!$crew) {
            return redirect()->route('crew')->with('error', 'Crew not found.');
        }
        return view('crew.edit', compact('crew', 'vendors'));
    }

    /**
     * Update the specified crew in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'link_gbr' => 'sometimes|image|mimes:jpeg,png,jpg|max:3072', // Validasi file gambar hanya jika file baru diupload
            'posisi' => 'required',
            'vendor_id' => 'required|exists:vendors,id'
        ]);

        $crew = Crew::find($id);
        if (!$crew) {
            return redirect()->route('crew')->with('error', 'Crew not found.');
        }

        $crew->nama = $request->nama;
        $crew->posisi = $request->posisi;
        $crew->vendor_id = $request->vendor_id;

        if ($request->hasFile('link_gbr')) {
            $file = $request->file('link_gbr');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $targetPath = storage_path('app/public/crew'); // Menggunakan storage path
            $file->move($targetPath, $filename); // Memindahkan file
            $crew->link_gbr = 'storage/crew/' . $filename; // Menyimpan path relatif yang benar
        }

        $crew->save();

        return redirect()->route('crew')->with('success', 'Crew updated successfully.');
    }

    /**
     * Remove the specified crew from storage.
     */
    public function destroy(Crew $crew, $id)
    {
        $crew = Crew::find($id);
        $crew->delete();
        return redirect()->route('crew')->with('success', 'Crew deleted successfully.');
    }
}
