<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class OrderController extends Controller
{
    public function index()
    {
        return view('orderindex');
    }

    public function create()
    {
        return view('order.create');
    }

    public function store(Request $request)
    {
    }

    public function edit()
    {
        return view('order.edit');
    }


    public function update(Request $request, $id)
    {
    }

    public function destroy()
    {
    }
}
