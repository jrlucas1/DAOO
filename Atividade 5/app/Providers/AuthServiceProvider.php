<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('manage-animais', function ($user) {
            return $user->hasRole(['admin', 'manager']);
        });\

        Gate::define('manage-atividades', function ($user) {
            return $user->hasRole(['admin']);
        });

        Gate::define('manage-produtos', function ($user) {
            return $user->hasRole(['admin', 'manager']);
        });
    }
}
