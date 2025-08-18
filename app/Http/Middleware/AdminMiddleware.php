<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('admin')) {
            return redirect()->route('login')->with('error', 'Please login first.');
        }
        return $next($request);
    }
}
