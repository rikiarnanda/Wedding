<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;
use App\Models\Testimoni;
use App\Models\Crew;
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
        return view('landing_page.vendor', compact('vendors'));
    }

    public function paket()
    {
        $pakets = Paket::all();
        return view('landing_page.paket', compact('pakets'));
    }

}
