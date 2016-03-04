<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected $AdminAuth;
    public function __construct(Guard $auth)
    {
        $this->AdminAuth = $auth;
    }


    public function handle($request, Closure $next)
    {
        //
        if (Auth::guest("admin")) {

            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                //dd(url('manager/display'));
                return redirect()->guest('manager/auth/login');
            }
        }
        return $next($request);
    }
}
