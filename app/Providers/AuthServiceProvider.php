<?php

namespace App\Providers;

<<<<<<< HEAD
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
=======
// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
>>>>>>> 7fbd055b94355a4e66eeaae25932488a9754a3f5

class AuthServiceProvider extends ServiceProvider
{
    /**
<<<<<<< HEAD
     * The policy mappings for the application.
=======
     * The model to policy mappings for the application.
>>>>>>> 7fbd055b94355a4e66eeaae25932488a9754a3f5
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
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
