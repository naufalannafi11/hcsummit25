<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    // Menampilkan form login untuk admin
    public function showLoginForm()
    {
        return view('admin.login'); // Pastikan ada view login di resources/views/admin/login.blade.php
    }

    // Proses autentikasi admin
    public function login(Request $request)
    {
        // Validasi input dari form login
        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ]);

        // // Cek apakah admin bisa login menggunakan email dan password yang diberikan
        // if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        //     // Jika berhasil login, redirect ke halaman daftar pengguna
        //     return redirect()->route('admin.users');
        // }

        // // Jika gagal, kembalikan ke halaman login dengan pesan error
        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ]);
        $credentials = $request->only('email', 'password');
        
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    // Menampilkan daftar pengguna setelah login berhasil
    public function dashboard()
    // {
    //     // Ambil semua data pengguna dari database
    //     $users = User::all(); 

    //     // Tampilkan halaman admin.users dengan data pengguna
    //     return view('admin.users', ['users' => $users, 'title' => 'Daftar Pengguna']);
    // }

    // // Menampilkan halaman dashboard admin setelah login
    // public function dashboard()
    // {
    //     return view('admin.dashboard'); // Tampilkan halaman dashboard admin
    // }
    {
        $users = User::all(); // Mengambil semua data user
        return view('admin.dashboard', compact('users'));
    }
}
