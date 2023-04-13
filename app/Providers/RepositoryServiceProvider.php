<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Impl\UserRepositoryImpl;
use App\Repositories\Repository\UserRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            UserRepository::class,
            UserRepositoryImpl::class,
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
