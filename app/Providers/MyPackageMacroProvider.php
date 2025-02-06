<?php

namespace App\Providers;

use App\MyPackageClass;
use Illuminate\Support\ServiceProvider;

class MyPackageMacroProvider extends ServiceProvider
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
        MyPackageClass::macro('doSomethingElse', function () {
            return 'I\'m doing something else now...';
        });
    }
}
