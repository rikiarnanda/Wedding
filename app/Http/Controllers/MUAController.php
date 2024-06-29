<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MUAController extends Controller
{
    public function index()
    {
        return view('MUA.index');
    }

    public function create()
    {
        return view('MUA.create');
    }

    public function store(Request $request)
    {
    }

    public function edit()
    {
        return view('MUA.edit');
    }


    public function update(Request $request, $id)
    {
    }


    public function destroy()
    {
    }
}
