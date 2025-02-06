<?php

namespace App;

use Illuminate\Support\Traits\Macroable;

class MyPackageClass
{
    use Macroable;

    public function doSomething(): string
    {
        return 'I\'m doing something...';
    }
}
