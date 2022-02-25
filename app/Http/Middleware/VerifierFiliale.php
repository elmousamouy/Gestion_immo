<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class VerifierFiliale
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
        $len = count(explode("/", $request->url()))-1;
        $entreprise_id = (int)explode("/", $request->url())[$len];
        //dd($entreprise_id);
        if(Auth::user()->role_id == 1  || Auth::user()->entreprise_id == $entreprise_id ){
            return $next($request);
        }else{
            return redirect()->back();
        }
    }
}
