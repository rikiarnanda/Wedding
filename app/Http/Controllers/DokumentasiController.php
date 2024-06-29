<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DokumentasiController extends Controller
{
    public function index()
    {
        return view('dokumentasi.index');
    }

    public function create()
    {
        return view('dokumentasi.create');
    }

    public function store(Request $request)
    {
    }

    public function edit()
    {
        return view('dokumentasi.edit');
    }


    public function update(Request $request, $id)
    {
    }


    public function destroy()
    {
    }
}
