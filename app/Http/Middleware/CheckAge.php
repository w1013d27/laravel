<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
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

       //var_dump('*********checkAge**********');
        if ($request->age <= 200)
          //  return "age is less than 200!";
            return redirect('home');
        return $next($request);
    }
}
