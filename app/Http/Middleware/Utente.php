<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Utente
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::user()->usertype == 'null')
        {
            $notification = array(
                'message' => 'Effettua il login o registrati',
                'alert-type' => 'error'
            );
            return back()->with($notification); 
           
        }
        return $next($request);

        
    }
}
