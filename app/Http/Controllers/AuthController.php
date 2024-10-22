<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');  // Buat tampilan login nanti
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Ambil data pengguna dari database
        $user = DB::table('users')
            ->where('username', $request->username)
            ->first();

        // Verifikasi password menggunakan Hash::check()
        if ($user && Hash::check($request->password, $user->password)) {
            // Login berhasil
            return view('backend.dashboard');
        }

        // Jika gagal
        return response()->json(['message' => 'Username atau password salah'], 401);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}

