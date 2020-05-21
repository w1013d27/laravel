<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helpers\Helper;
class HelperServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        foreach (glob(app_path() . '/Helpers/*.php') as $file) {
            require_once($file);
        }
        $this->app->bind(Helper::class,function ($app){

            return new \App\Helpers\Helper();
        },true);
       // $this->app->alias('help',Helper::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
