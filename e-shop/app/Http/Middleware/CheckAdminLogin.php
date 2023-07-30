<?php

namespace App\Http\Middleware;

use App\Utilities\Constant;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckAdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::guest()){
            return redirect()->guest('admin/login');
        }
        if(Auth::user()->level != Constant::USER_LEVEL_ADMIN && Auth::user()->level != Constant::USER_LEVEL_MANAGER){
            //
            Auth::logout();
            return redirect()->guest('admin/login');
        }
        return $next($request);
    }
}
