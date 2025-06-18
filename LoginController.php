<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function proses(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        // Cari user berdasarkan email
        $user = User::where('email', $request->email)->first();

        // Cek apakah user ditemukan dan password cocok
        if ($user && Hash::check($request->password, $user->password)) {
            // Simpan informasi user ke session (atau pakai Auth::login jika pakai guard)
            session(['user_id' => $user->id]);
            session(['user_role' => $user->role]);
            session(['user_name' => $user->name]);

            // Redirect sesuai role
            if ($user->role === 'admin') {
                return redirect()->route('laporan.pemakaian');
            } elseif ($user->role === 'tenaga_medis') {
                return redirect()->route('tenaga_medis.peminjaman');
            } elseif ($user->role === 'teknisi') {
                return redirect()->route('teknisi.index');

            } else {
                // Role tidak dikenali
                return redirect()->route('login')->with('error', 'Role user tidak dikenali.');
            }
        } else {
            // Gagal login
            return redirect()->route('login')->with('error', 'Email atau password salah.');
        }
        
    }
}
