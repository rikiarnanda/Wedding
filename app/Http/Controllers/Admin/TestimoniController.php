<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Paket;
use App\Models\Testimoni;
use App\Models\Vendor;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function testimoni()
    {
        $testimonis = Testimoni::all();
        return view('testimoni.table', compact('testimonis'));
    }

    public function create()
    {
        $pakets = Paket::all();
        return view('testimoni.create', compact('pakets'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'testimoni' => 'required',
            'paket_id' => 'required|exists:pakets,id'
        ]);

        $testimoni = new Testimoni;
        $testimoni->testimoni = $request->testimoni;
        $testimoni->paket_id = $request->paket_id;
        $testimoni->save();

        return redirect()->route('testimoni')->with('success', 'Testimoni created successfully.');
    }

    public function editTestimoni($id)
    {
        $testimoni = Testimoni::find($id);
        $pakets = Paket::all();
        return view('testimoni.edit',compact('testimoni'));
    }

    public function updateTestimoni(Request $request, $id){
        $request->validate([
            'testimoni' => 'required',
        ]);

        $testimoni = Testimoni::find($id);
        $testimoni->testimoni = $request->testimoni;
        $testimoni->save();

        return redirect()->route('testimoni')->with('success', 'Testimoni updated successfully.');
    }
    

 
    public function destroy(Testimoni $testimoni, $id)
    {
        $testimoni = Testimoni::find($id);
        $testimoni->delete();
        return redirect()->route('testimoni')->with('success', 'Testimoni deleted successfully.');
    }
}
