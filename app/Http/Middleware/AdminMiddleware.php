<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah user sudah login
        if (!auth()->check()) {
            return redirect()->route('login')
                ->with('error', 'Silakan login terlebih dahulu');
        }

        // Cek apakah user adalah admin
        if (!auth()->user()->is_admin) {
            abort(403, '🚫 Akses ditolak. Halaman ini hanya untuk Admin.');
        }

        return $next($request);
    }
}