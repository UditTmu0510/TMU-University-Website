<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate; // Uncommented this line
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Policies\UserPolicy; // Changed "app" to "App"
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
    $this->registerPolicies();
    Gate::define('view', 'App\Policies\UserPolicy@view');
    Gate::define('add-users', 'App\Policies\UserPolicy@create');
    Gate::define('update-users', 'App\Policies\UserPolicy@update');
    Gate::define('delete-users', 'App\Policies\UserPolicy@delete');
    }

}
