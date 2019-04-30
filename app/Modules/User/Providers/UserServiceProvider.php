<?php

namespace App\Modules\User\Providers;


use Illuminate\Support\ServiceProvider;
use App\Modules\User\Services\UserService;
use App\Modules\User\Contracts\UserServiceInterface;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Modules\User\Contracts\UserServiceInterface',
            'App\Modules\User\Services\UserService' 
        );
    }
}
