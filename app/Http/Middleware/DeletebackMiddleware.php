<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DeletebackMiddleware
{

    public function handle(Request $request, Closure $next)
    {
    if(session()->has('loginid') && session()->has('userrole') == 'admin'){
        return redirect('/Admin/Dashboard'); 
    }elseif(session()->has('loginid') && session()->has('userrole') == 'orgnization'){
        return redirect('/Orgnization/Dashboard'); 
    }
        $response = $next($request);
        return $response->header('Cache-Control','nocache, no-store, max-age=0, must-revalidate')
        ->header('Pragma','no-cache')
        ->header('Expires','Sun, 02 Jan 1990 00:00:00 GMT');
    }
}
