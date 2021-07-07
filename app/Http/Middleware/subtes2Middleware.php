<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class subtes2Middleware
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
        // session()->forget('soal_1');
        // $cek=$request->session()->get('soal_2');
        // if ($cek == "Ini Soal 2") {
        //     return $next($request);
        // }
        // return redirect('/');
        if ($request->session()->has('soal_2')) {
            return $next($request);
        }
        return redirect('/');
    }
}
