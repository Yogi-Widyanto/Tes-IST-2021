<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class subtes4Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->session()->has('soal_4')) {
            return $next($request);
        }
        return redirect('/');
    }
}
