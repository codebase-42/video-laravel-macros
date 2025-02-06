<?php

namespace App\Providers;

use App\Mixins\CollectionMixin;
use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class CollectionsMixinProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Collection::mixin(new CollectionMixin());
    }
}
