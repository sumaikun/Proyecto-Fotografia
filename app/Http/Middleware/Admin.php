<?php

namespace Konrad\Http\Middleware;


use Illuminate\Contracts\Auth\Guard;
use Closure;
use Session;

class Admin
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
           if($this->auth->user()->rol !=1)
        {
             return redirect('inicio')->with('message','noAllowed');
        }
            return $next($request);
    }
}
