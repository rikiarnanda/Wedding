<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function dashboard()
    {

        return view('dashboard', []);
    }

    public function vendors()
    {
        // $vendors = Vendor::all();
        return view('vendor.table-vendor', []);
    }

    public function formVendor()
    {
        return view('vendor.create', []);
    }

    public function editVendor()
    {
        // $vendor = Vendor::find($id);
        return view('vendor.edit', []);
    }

    //paket
    public function paket()
    {
        // $vendors = Vendor::all();
        return view('paket.table', []);
    }

    public function formPaket()
    {
        return view('paket.create', []);
    }

    public function editPaket()
    {
        // $vendor = Vendor::find($id);
        return view('paket.edit', []);
    }

    //crew
    public function crew()
    {
        // $vendors = Vendor::all();
        return view('crew.table', []);
    }

    public function formCrew()
    {
        return view('crew.create', []);
    }

    public function editCrew()
    {
        // $vendor = Vendor::find($id);
        return view('crew.edit', []);
    }

    //testimoni
    public function testimoni()
    {
        // $vendors = Vendor::all();
        return view('testimoni.table', []);
    }

    public function formTestimoni()
    {
        return view('testimoni.create', []);
    }

    public function editTestimoni()
    {
        // $vendor = Vendor::find($id);
        return view('testimoni.edit', []);
    }
}
