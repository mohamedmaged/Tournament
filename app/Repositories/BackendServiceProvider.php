<?php

namespace App\Repositories;

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(
            'App\Repositories\TeamRepositoryInterface',
            'App\Repositories\TeamRepository'
        );

        $this->app->bind(
            'App\Repositories\MatchRepositoryInterface',
            'App\Repositories\MatchRepository'
        );
    }
}