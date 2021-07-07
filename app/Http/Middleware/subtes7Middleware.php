<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class subtes7Middleware
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
        if ($request->session()->has('soal_7')) {
            return $next($request);
        }
        return redirect('/');
    }
}
