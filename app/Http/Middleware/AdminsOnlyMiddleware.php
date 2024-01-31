<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminsOnlyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

//        @dd(auth()->user()->name);
        if(auth()->user()->name !== 'Sajadul mulk'){
            abort(Response::HTTP_FORBIDDEN);
        }
            return $next($request);
    }
}
