<?php

namespace App\Http\Middleware;

use Closure;

class IsInstructor
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
        if(auth()->user()->is_instructor == 1){
            return $next($request);
        }
   
        return redirect('home')->with('message',"You don't have admin access.");
    }
}
