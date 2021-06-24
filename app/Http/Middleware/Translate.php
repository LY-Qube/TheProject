<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class Translate
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
        // check user lang
        if (auth()->check()) {
            app()->setLocale(auth()->user()->lang);
        }
        // check cookie lang
        elseif (Cookie::get('lang')) {
            app()->setLocale(Cookie::get('lang'));
        }
        return $next($request);
    }
}
