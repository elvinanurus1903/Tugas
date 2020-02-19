<?php

namespace App\Http\Middleware;

use Closure;

class logged
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(\Session::has('user')){
            return redirect('upload');
        }
        return $next($request);
    }
}
