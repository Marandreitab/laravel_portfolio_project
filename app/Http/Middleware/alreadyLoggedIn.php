<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Portfolio;

class alreadyLoggedIn
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
        if(\Session::has('loginId')){
            $data = array();
            $data= Portfolio::where('id','=',\Session::get('loginId'))->first();
            if(($data->extra1 == "ADMIN") && (url('/')==$request->url())){
                return back()->with('fail','ACCESS DENIED YOU NEED TO LOG OUT FIRST');
            }
        } 
        return $next($request)->header('Cache-Control','no-cache,no-store,max-age=0, must-revalidate')
        -> header('Pragma','no-cache')
        ->header('Expires','Sat 01 Jan 1990 00:00:00 GMT');
    }
}
