<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/test',function (){
  echo "Api Test!" ;
});
Route::get('definedguard',function (Request $request){
$user = $request->user();
    var_dump($user->getAuthPassword(),
   $user->getAuthIdentifierName(),
   $user->getAuthIdentifier(),
   $user->getRememberToken(),
    $user->getRememberTokenName()
    );
})->middleware('auth:api2');

