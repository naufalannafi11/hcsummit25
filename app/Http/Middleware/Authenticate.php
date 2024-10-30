<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            // Redirect ke halaman login admin jika URL mengandung 'admin'
            return $request->is('admin/*') ? route('admin.login') : route('login');
        }
    }
}
