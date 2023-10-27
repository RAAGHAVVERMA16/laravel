<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Session;

class CustomAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        //echo "hii";
       echo $path=$request->path();
       if(($path=="login"||"student-info") && Session::get('student'))
       {
        return redirect('/');
       }
       else if(($path!=="login" && !Session::get('student')) && ($path!=="student-info" && !Session::get("student")));
       {

        return redirect('/login');
       }
        return $next($request);
    }
}
