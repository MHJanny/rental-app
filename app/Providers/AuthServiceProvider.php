<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Category;
use App\Models\Property;
use App\Policies\MenuPolicy;
use App\Policies\CategoryPolicy;
use App\Policies\PropertyPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Category::class => CategoryPolicy::class,
        Property::class => PropertyPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
        Gate::define('view-rentals', [MenuPolicy::class, 'viewRentals']);
        Gate::define('view-reviews', [MenuPolicy::class, 'viewReviews']);
        Gate::define('view-users', [MenuPolicy::class, 'viewUsers']);
        Gate::define('add-category', [CategoryPolicy::class,'create']);
    }

}
