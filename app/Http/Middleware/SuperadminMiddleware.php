<?php

namespace App\Http\Middleware;

use Closure;

class SuperadminMiddleware
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
        $user = auth()->user();

        if(! $user->hasRole('admin')){
            
            return redirect('/');
        
        }
        
        return $next($request);
    }
}
