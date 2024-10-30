<?php

use App\Models\Post;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminDashboardController;
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
    $post = Post::where('slug', $slug)->firstOrFail();

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

// Route Schedule
Route::get('/schedule', function () {
    $schedule = []; // Placeholder untuk data jadwal
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

// Route Admin Login, Logout
Route::get('admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');


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
