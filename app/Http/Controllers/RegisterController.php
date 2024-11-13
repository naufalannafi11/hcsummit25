<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\OtpMail;
use Illuminate\Support\Str;
use Carbon\Carbon;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        // Validasi data registrasi
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email:dns|unique:users',
            'password' => 'required|string|min:8',
            'agency' => 'required|string|max:25',
            'participation' => 'required|array|min:1'
        ]);

        // Generate OTP
        $otp = Str::random(6);

        // Simpan data registrasi dan OTP di session untuk sementara
        session([
            'registration_data' => $request->only('name', 'email', 'password', 'agency', 'participation'),
            'otp' => $otp,
            'otp_expires_at' => Carbon::now()->addMinutes(10) // OTP berlaku selama 10 menit
        ]);

        // Kirim OTP ke email
        Mail::to($request->email)->send(new OtpMail($otp));

        return redirect()->route('register.verifyOtpForm')->with('success', 'OTP telah dikirim ke email Anda.');
    }

    // Menampilkan halaman verifikasi OTP
    public function showVerifyOtpForm()
    {
        $otp = session('otp'); 
        return view('verifyOtp', compact('otp')); 
    }

    public function verifyOtp(Request $request)
    {
        // Validasi input OTP
        $request->validate([
            'otp' => 'required|string',
        ]);

        // Ambil data OTP, masa berlaku, dan data registrasi dari session
        $otp = session('otp');
        $otpExpiresAt = session('otp_expires_at');
        $registrationData = session('registration_data');

        // Cek apakah OTP valid dan belum kedaluwarsa
        if ($otp && $otpExpiresAt && now()->lessThanOrEqualTo($otpExpiresAt) && $otp === $request->otp) {
            // Simpan data ke database jika OTP valid
            User::create([
                'name' => $registrationData['name'],
                'email' => $registrationData['email'],
                'password' => bcrypt($registrationData['password']),
                'agency' => $registrationData['agency'],
                'participation' => json_encode($registrationData['participation']),
            ]);

            // Hapus data OTP dan session
            session()->forget(['otp', 'otp_expires_at', 'registration_data']);

            // Redirect ke halaman home dengan pesan sukses
            return redirect()->route('home')->with('success', 'Registrasi berhasil.');
        }

        // Jika OTP salah atau sudah kadaluwarsa
        return back()->withErrors(['otp' => 'OTP tidak valid atau telah kedaluwarsa.']);
    }
}
