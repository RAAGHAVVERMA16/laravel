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
    // public function handle(Request $request, Closure $next): Response
    // {

    //     //echo "hii";
    //    echo $path=$request->path();
    //    if(($path=="login"||"student-info") && Session::get('student'))
    //    {
    //     return redirect('/');
    //    }
    //    else if(($path!=="login" && !Session::get('student')) && ($path!=="student-info" && !Session::get("student")))
    //    {

    //     return redirect('/login');
    //    }
    //     return $next($request);
    // }
    // public function handle(Request $request, Closure $next): Response
    // {
    //     $path = $request->path();
    
    //     // Check if the path is 'list' or 'list.php'
    //     if (($path === 'list' || $path === 'list.php') && !Session::get('student')) {
    //         // Redirect to the login page if the person is not logged in
    //         return redirect('/login');
    //     }
    
    //     return $next($request);
    // }

//     public function handle(Request $request, Closure $next): Response
// {
//     if (!Session::get('student')) {
//         // Redirect to the login page for unauthenticated users
//         return redirect('/login');
//     }

//     return $next($request);
// }
public function handle(Request $request, Closure $next): Response
{
    // if (!$request->session()->has('student')) {
    //     // Redirect to the login page for unauthenticated users
    //     return redirect('/login');
    // }

    return $next($request);
}


}
