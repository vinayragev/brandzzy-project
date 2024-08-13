<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Request as Facades_Request;
use DB;

class roleCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->user()===null){
            return redirect('/login?error=auth&message=Please login');
        }
        $auth = DB::table('auth')->where(['role_id'=>auth()->user()->role_id,'pathname'=>Facades_Request::path()])->count();
        if($auth===0){
            return redirect('/admin?error=auth');
        }

        return $next($request);
    }
}
