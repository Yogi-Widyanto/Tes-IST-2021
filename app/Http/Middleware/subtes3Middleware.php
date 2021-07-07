<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class subtes3Middleware
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
        if ($request->session()->has('soal_3')) {
            return $next($request);
        }
        return redirect('/');
    }
}
