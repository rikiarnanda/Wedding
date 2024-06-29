<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class BandController extends Controller
{
    public function index()
    {
        return view('band.index');
    }

    public function create()
    {
        return view('band.create');
    }

    public function store(Request $request)
    {
    }

    public function edit()
    {
        return view('band.edit');
    }


    public function update(Request $request, $id)
    {
    }


    public function destroy()
    {
    }
}
