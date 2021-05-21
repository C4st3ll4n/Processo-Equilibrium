<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class autenticado
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
        if(session('logado')!=1)
            return redirect('/');
        return $next($request);
    }
}
