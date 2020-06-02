<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Menu' => 'App\Policies\MenuPolicy',
        'App\Dining' => 'App\Policies\DiningPolicy',
        'App\Photo' => 'App\Policies\PhotoPolicy',
        'App\Spencerdining' => 'App\Policies\SpencerdiningPolicy',
        'App\Spencerphoto' => 'App\Policies\SpencerphotoPolicy',
        'App\Spencermenu' => 'App\Policies\SpencermenuPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
