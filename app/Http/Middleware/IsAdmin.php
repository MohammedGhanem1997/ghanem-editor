<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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

                if (Auth::user() &&  Auth::user()->admin == 1) {
//                    return redirect(RouteServiceProvider::ADMIN);
                    return  $next($request);

                }
                elseif (Auth::user()){
                   return redirect(RouteServiceProvider::HOME);

                }


        return redirect('/');

    }
}
