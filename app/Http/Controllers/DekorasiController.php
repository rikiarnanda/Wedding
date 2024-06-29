<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DekorasiController extends Controller
{
    public function index()
    {
        return view('dekorasi.index');
    }

    public function create()
    {
        return view('dekorasi.create');
    }

    public function store(Request $request)
    {
    }

    public function edit()
    {
        return view('dekorasi.edit');
    }


    public function update(Request $request, $id)
    {
    }


    public function destroy()
    {
    }
}
