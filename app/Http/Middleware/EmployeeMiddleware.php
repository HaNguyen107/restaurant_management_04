<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;

class EmployeeMiddleware
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
        if (auth()->check() && auth()->user()->role == User::ROLE_EMPLOYEE){
            return $next($request);
        }

        return redirect('/home');
    }
}
