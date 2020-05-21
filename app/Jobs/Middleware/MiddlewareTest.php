<?php


namespace App\Jobs\Middleware;


class MiddlewareTest
{

    function handle($job,$next){

        $next($job);
    }
}
