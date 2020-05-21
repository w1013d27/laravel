<?php

namespace App\Providers;
use Illuminate\Auth\Access\Response;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Post;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Auth::viaRequest('custom_name', function (Request $request) {
           // return User::where('name', $request->user()->name)->first();
            return User::find(56);
        });
        Gate::define('edit-settings', function ($user,Post $post) {
            var_dump($post);
            return $user->name ==='w1013d27';
        });
/*
        Gate::before(function ($user,$ability){
            if ($user->name === 'wagndaxu'){
                return true;
            }else
                return false;
        });*/
        Gate::after(function ($user, $ability, $result, $arguments){
         // var_dump($ability,$result,$arguments);
         //  return Response::deny('12345');
            return 123;
        });

Gate::define('and-response',function ($user){
  return $user->name === "wagndaxu" ;
});

        //$this->registerPolicies();
        /*
        Auth::viaRequest('custom_name', function (Request $request) {
            return User::where('email', basicToken($request)[0])->first();
        });
        */
    }
}
