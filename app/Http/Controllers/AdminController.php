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
}
