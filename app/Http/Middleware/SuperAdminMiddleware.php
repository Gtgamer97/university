<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SuperAdminMiddleware
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
        if(auth()->guest()){
            return response([
               'message' => 'You must Login first to make this action!'
           ],401);
       }else if(!auth()->user()->superadmin){
           return response([
               'message' => 'Only Superadmin can make this action!'
           ],401);
       }
        return $next($request);
    }
}
