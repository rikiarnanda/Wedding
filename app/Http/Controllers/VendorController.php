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
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:3072', // 3MB = 3072KB
            'lokasi' => 'required'
        ]);

        $path = $request->file('gambar')->store('public/vendor');

        Vendor::create([
            'nama_vendor' => $request->nama_vendor,
            'gambar' => $path,
            'lokasi' => $request->lokasi
        ]);

        return redirect()->route('vendor.create')->with('success', 'Vendor added successfully.');
    }

    public function editVendor($id)
    {
        $vendor = Vendor::find($id);
        return view('vendor.edit', compact('vendor'));
    }

    public function deleteVendor($id)
    {
        $vendor = Vendor::find($id);
        $vendor->delete();
        return redirect()->route('vendor')->with('success', 'Vendor deleted successfully.');
    }
}
