<?php

namespace App\Providers;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class CollectionsMacroProvider extends ServiceProvider
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
        Collection::macro('getEven', function () {
            return $this->where(function ($item, $key) {
                if (!is_int($key)) {
                    throw new \Exception(
                        'This can only be used by collections with integer keys',
                    );
                }

                return $key % 2 === 0;
            })->values();
        });

        Collection::macro('getOdd', function () {
            return $this->where(function ($item, $key) {
                if (!is_int($key)) {
                    throw new \Exception(
                        'This can only be used by collections with integer keys',
                    );
                }

                return $key % 2 !== 0;
            })->values();
        });
    }
}
