<?php

use App\Models\Post;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

// Route Home
Route::get('/', function () {
    return view('home');
})->name('home');

// Route Posts
Route::get('/posts', function () {
    return view('posts', ['posts' => Post::all()]);
});

Route::get('/posts/{slug}', function ($slug) {
    // Cari post berdasarkan slug, bukan ID
    $post = Arr::first(Post::all(), function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

// Route Schedule
Route::get('/schedule', function () {
    $schedule = []; 
    return view('schedule', ['schedule' => $schedule]);
});

// Route Contact
Route::get('/contact', function () {
    return view('contact');
});

// Route Road to HC
Route::get('/roadToHC', function () {
    return view('roadToHC');
});

// Rute untuk halaman registrasi
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/submit', [RegisterController::class, 'store'])->name('register.store');

// Rute untuk menampilkan form verifikasi OTP
Route::get('/verify-otp', [RegisterController::class, 'showVerifyOtpForm'])->name('register.verifyOtpForm');
Route::post('/verify-otp', [RegisterController::class, 'verifyOtp'])->name('register.verifyOtp');

// Rute untuk login admin
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login']);
// Rute untuk menampilkan daftar pengguna (harus login)
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->middleware('auth:admin')->name('admin.dashboard');


