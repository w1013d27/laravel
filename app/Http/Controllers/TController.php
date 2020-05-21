<?php


namespace App\Http\Controllers;
use  App\User;
use App\Http\Requests;

use Illuminate\Http\Request;

class TController extends Controller
{
    //
    function __construct()
    {

        $this->middleware(
         function ($request,$next){

             \Log::info('test');
            return $next($request);
         }
        );
    }

    function show(Request $request,User $id){
var_dump($id);

    }

    function bo($id){

    }
}
