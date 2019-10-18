<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Http\Constants\UserRole;

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

        /*
         * dashboard management
         */
        Gate::define('dashboard', function ($userRole) {
            return $userRole->role === UserRole::ROLE_ADMIN;   // admin = 1
        });
        Gate::define('user.index', function ($userRole) {
            return $userRole->role === UserRole::ROLE_ADMIN;   // admin = 1
        });
    }
}
