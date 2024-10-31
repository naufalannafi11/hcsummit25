<?php

use App\Models\Post;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;

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

// Route Register
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/submit', [RegisterController::class, 'store'])->name('register.store');

Route::get('/emails/otp', [RegisterController::class, 'showVerifyOtpForm'])->name('register.verifyOtpForm');

// Route untuk memverifikasi OTP yang diinput pengguna
Route::post('/emails/otp', [RegisterController::class, 'verifyOtp'])->name('register.verifyOtp');

// Route Admin Login, Logout
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'authenticate'])->name('admin.authenticate');
Route::get('/admin/users', [AdminController::class, 'index'])->name('admin.users')->middleware('auth'); // Halaman untuk menampilkan data pengguna


// // Route Admin Dashboard with Middleware
// Route::middleware('auth:admin')->group(function () {
//     Route::get('admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
// });

// // Route Email Verification
// Route::get('/email/verify', function () {
//     return view('auth.verify-email');
// })->middleware('auth')->name('verification.notice');

// Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//     $request->fulfill();
//     return redirect('/home'); // Ganti dengan halaman setelah verifikasi berhasil
// })->middleware(['auth', 'signed'])->name('verification.verify');

// Route::post('/email/verification-notification', function (Request $request) {
//     $request->user()->sendEmailVerificationNotification();
// //     return back()->with('message', 'Link verifikasi email telah dikirim.');
// })->middleware(['auth', 'throttle:6,1'])->name('verification.send');
