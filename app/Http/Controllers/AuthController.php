<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

    if (Auth::attempt($credentials)) {
        $user = Auth::user();
        if ($user->role === 'admin') {
            return redirect()->intended('vendor');
        } elseif ($user->role === 'user') {
            return redirect()->intended('dashboard');
        }
    }

    return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }


    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validasi input dari form registrasi
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:20',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'username' => 'required|string|unique:users,username',
        ]);

        // Menambahkan role default 'user' ke data yang akan disimpan
        $validatedData['role'] = 'user';

        // Enkripsi password sebelum disimpan
        $validatedData['password'] = Hash::make($validatedData['password']);

        // Simpan data user ke dalam database
        $user = User::create($validatedData);

        // Redirect atau berikan respons sukses
        return redirect()->route('login')->with('success', 'Registrasi berhasil!');
    }

    public function logout()
    {
    if (Auth::user()->role === 'user') {
        Auth::logout();
        return redirect('/dashboard');
    }

    Auth::logout();
    return redirect('/');
    }
}
