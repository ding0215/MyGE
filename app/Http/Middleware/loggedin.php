<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class loggedin
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
        if(!$request->session()->has('Logged_in')){
            $request->session()->flash('Message', 'This is a message');
            return redirect('/admin');
        }
        
        return $next($request);
    }
}
