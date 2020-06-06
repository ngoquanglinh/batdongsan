<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class adminMiddleware
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
        $user=auth::user();
        if($user->u_quyen==1)
                return $next($request);
        else
            echo"<script> alert('Bạn không có quyền vào đây'); history.back();</script>";
        
    }
}
