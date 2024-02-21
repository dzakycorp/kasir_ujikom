<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class petugas
{
    /**
    * Handle an incoming request.
    *
    * @param \Illuminate\Http\Request $request
    * @param \Closure $next
    * @return mixed
    */
    public function handle($request, Closure $next)
    {
       if (Auth::check() && Auth::user()->level == 'petugas') {
         return $next($request);
       }if (Auth::check() && Auth::user()->level == 'admin') {
         return $next($request);
       }
      return redirect('/login');
    }
   }
