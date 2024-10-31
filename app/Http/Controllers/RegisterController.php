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

        // Simpan data di session untuk sementara
        session([
            'registration_data' => $request->only('name', 'email', 'password', 'agency', 'participation'),
            'otp' => $otp,
            'otp_expires_at' => Carbon::now()->addMinutes(10) // OTP berlaku selama 10 menit
        ]);

        // Kirim OTP ke email
        Mail::to($request->email)->send(new OtpMail($otp));

        return redirect()->route('/emails/otp')->with('success', 'OTP telah dikirim ke email Anda.');
    }

    public function showVerifyOtpForm()
    {
        return view('emails.otp');
    }

    public function verifyOtp(Request $request)
    {
        // Ambil data OTP dari session
        $otp = session('otp');
        $otpExpiresAt = session('otp_expires_at');
        $registrationData = session('registration_data');

        // Cek apakah OTP masih valid
        if ($otp && $otpExpiresAt && now()->lessThanOrEqualTo($otpExpiresAt) && $otp === $request->otp) {
            // Jika OTP valid, simpan data ke database
            User::create([
                'name' => $registrationData['name'],
                'email' => $registrationData['email'],
                'password' => bcrypt($registrationData['password']),
                'agency' => $registrationData['agency'],
                'participation' => json_encode($registrationData['participation']),
            ]);

            // Hapus data dari session
            session()->forget(['otp', 'otp_expires_at', 'registration_data']);

            return redirect()->route('home')->with('success', 'Registrasi berhasil.');
        }

        return back()->withErrors(['otp' => 'OTP tidak valid atau telah kedaluwarsa.']);
    }
}
