<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class subtes1Middleware
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
        //$data=$request->session()->get('soal_1');

        // if (session('soal_1')) {
        //     return $next($request);
        // }
        if ($request->session()->has('soal_1')) {
            return $next($request);
        }
        return redirect('/');

        
        


    }
}
