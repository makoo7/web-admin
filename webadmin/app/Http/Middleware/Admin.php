<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class Admin {

/**
* Handle an incoming request.
*
* @param  \Illuminate\Http\Request  $request
* @param  \Closure  $next
* @return mixed
*/
public function handle($request, Closure $next) {
    if (Auth::guard('admin')->guest()) {
        if ($request->ajax() || $request->wantsJson()) {
            return response('Unauthorized.', 401);
        }
        else {
            return redirect('admin');
        }
    }
    return $next($request);
}
}
