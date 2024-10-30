<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email:dns|unique:users',
            'password' => 'required|string|min:8',
            'agency' => 'required|string|max:25',
            'participation' => 'required|array|min:1'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'agency' => $request->agency,
            'participation' => json_encode($request->participation),
        ]);

        // $user->sendEmailVerificationNotification();
        session()->flash('success', 'Selamat Anda berhasil daftar.');
        return to_route('home');
    }
}
