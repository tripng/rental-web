<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\UserRepositoryInterface;
use App\Repositories\UserRepository;
use App\Repositories\ProductRepositoryInterface;
use App\Repositories\ProductRepository;
use Illuminate\Contracts\Support\DeferrableProvider;

class RepositoryServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public array $singletons = [
        UserRepositoryInterface::class => UserRepository::class,
        ProductRepositoryInterface::class => ProductRepository::class,
    ];
    public function provides(): array
    {
        return [
            ProductRepository::class,
            ProductRepository::class
        ];
    }
    /**
     * Register services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
