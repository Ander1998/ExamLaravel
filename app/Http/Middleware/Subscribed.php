<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Subscribed
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {   
        //if the user is subscribed it will return the user to the $next with the request parameter
        //most probably it will return a view or redirect if the user is subscribed, is a validation function
        //to check if the user is authorized or not
        if($request->user()->subscribed == true) {
            return $next($request);
        }
        //if the user is not subscribed it will return abort 403, which means the user is not authorized to
        //access the requested view or redirect
        return abort(403);
    }
}
