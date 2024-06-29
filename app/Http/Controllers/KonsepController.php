<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class KonsepController extends Controller
{
    public function index()
    {
        return view('konsep.index');
    }

    public function create()
    {
        return view('konsep.create');
    }

    public function store(Request $request)
    {
    }

    public function edit()
    {
        return view('konsep.edit');
    }


    public function update(Request $request, $id)
    {
    }


    public function destroy()
    {
    }
}
