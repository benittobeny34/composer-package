<?php

namespace Benitto\Crud;

use Illuminate\Support\ServiceProvider;

class CrudServiceProvider extends serviceProvider
{
    public function boot()
    {
       $this->loadRoutesFrom(__DIR__.'/routes/web.php');
       $this->loadViewsFrom(__DIR__.'/views','benitto');
       $this->loadMigrationsFrom(__DIR__.'/database/migrations');
       $this->mergeConfigFrom(__DIR__.'/config/crud.php','benitto');
       $this->publishes([__DIR__.'/config/crud.php' => config_path('benitto.php')]);
    }

    public function register()
    {

    }
}
