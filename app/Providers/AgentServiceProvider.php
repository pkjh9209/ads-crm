<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Jenssegers\Agent\Facades\Agent;
use Illuminate\Support\ServiceProvider;

class AgentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // $agent = Agent::isMobile();
        // $result = $agent;

        // View::share('agent', $result);
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
