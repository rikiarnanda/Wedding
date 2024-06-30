<?php

namespace App\Http\Controllers;

use App\Models\Band;
use Illuminate\Http\Request;
use App\Models\Paket;
use App\Models\Testimoni;
use App\Models\Crew;
use App\Models\Dekorasi;
use App\Models\Dokumentasi;
use App\Models\Konsep;
use App\Models\Mua;
use App\Models\Vendor;

class HomeController extends Controller
{
    public function index()
    {
        $pakets = Paket::all();
        $testimonis = Testimoni::with('paket')->get();
        return view('dashboard', compact('pakets', 'testimonis'));
    }

    public function crew()
    {
        $crews = Crew::all();
        return view('landing_page.crew', compact('crews'));
    }

    public function vendor()
    {
        $vendors = Vendor::all();
        $bands = Band::all();
        $konseps = Konsep::all();
        $dekorasi = Dekorasi::all();
        $dokumentasi = Dokumentasi::all();
        $mua = Mua::all();
        return view('landing_page.vendor', compact('vendors', 'bands', 'konseps', 'dekorasi', 'dokumentasi', 'mua'));
    }

    public function paket()
    {
        $pakets = Paket::with('konsep', 'band', 'mua', 'dekorasi', 'dokumentasi', 'vendor')
            ->get();
        return view('landing_page.paket', compact('pakets'));
    }
}
