<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user()->group_id;
        if ($user == 1) {
            return $next($request);
        } elseif ($user == 2) {
            return $next($request);
        } else {
            abort(403, 'Anda Tidak Memiliki Akses Untuk Halaman ini');
        }
    }
}
