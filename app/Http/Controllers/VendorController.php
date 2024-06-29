<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;

class VendorController extends Controller
{
    public function vendor()
    {
        $vendors = Vendor::all();
        return view('vendor.table-vendor', compact('vendors'));
    }

    public function create()
    {
        return view('vendor.create');
    }

    public function store(Request $request)
    {
    $request->validate([
        'nama_vendor' => 'required',
        'gambar' => 'required|image|mimes:jpeg,png,jpg|max:3072',
        'lokasi' => 'required'
    ]);

    $path = $request->file('gambar')->store('vendor', 'public');
    $filename = basename($path);

    Vendor::create([
        'nama_vendor' => $request->nama_vendor,
        'gambar' => $filename,
        'lokasi' => $request->lokasi
    ]);

    return redirect()->route('vendor')->with('success', 'Vendor added successfully.');
    }

    public function editVendor($id)
    {
        $vendor = Vendor::find($id);
        if (!$vendor) {
            return redirect()->route('vendor')->with('error', 'Vendor not found.');
        }
        return view('vendor.edit', compact('vendor'));
    }

    public function updateVendor(Request $request, $id)
    {
        $request->validate([
            'nama_vendor' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:3072', // Optional, 3MB = 3072KB
            'lokasi' => 'required'
        ]);

        $vendor = Vendor::find($id);
        if (!$vendor) {
            return redirect()->route('vendor')->with('error', 'Vendor not found.');
        }

        $vendor->nama_vendor = $request->nama_vendor;
        $vendor->lokasi = $request->lokasi;
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('vendor', 'public');
            $filename = basename($path);
            $vendor->gambar = $filename;
        }
        $vendor->save();

        return redirect()->route('vendor')->with('success', 'Vendor updated successfully.');
    }

    public function deleteVendor($id)
    {
        $vendor = Vendor::find($id);
        $vendor->delete();
        return redirect()->route('vendor')->with('success', 'Vendor deleted successfully.');
    }
}
