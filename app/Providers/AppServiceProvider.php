<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Invitation;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();

        Gate::define('admin', function(User $user){
            return $user->level == 'Admin';
        });

        Gate::define('user', function(User $user){
            return $user->level == 'User';
        });

        Gate::define('guest', function(){
            return Auth::check();
        });

        Gate::define('author', function(User $user, $invitation){
            return $user->id == $invitation->user_id;
        });
    }
}
