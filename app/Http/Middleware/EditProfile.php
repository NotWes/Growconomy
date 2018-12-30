<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class EditProfile
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


        if(!Auth::check()){
            abort(404);
        }

        return $next($request);
    }
}
