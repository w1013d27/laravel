<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

        \Validator::extendImplicit('foo',function ($attribute,$value,$parameters,$validator){
var_dump($parameters);
var_dump($validator->getData());
            return $value  == 'foo';
        });

#注册服务A被解析时触发的事件
/*
        \App::resolving(\B::class,function ($obj,$app){

            var_dump($obj,get_class($app));
        });*/
#注册服务A被解析时触发的事件
/*
        \App::resolving(\A::class,function ($obj,$app){

            var_dump($obj,get_class($app));
        });*/

    }
}
