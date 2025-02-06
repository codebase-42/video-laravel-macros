<?php

use App\CollectionHelper;
use App\MyPackageClass;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    $c = collect([
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
        'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
    ]);

    $even = CollectionHelper::getEven($c);
    $odd = CollectionHelper::getOdd($c);

    return [
        'even' => $even->toArray(),
        'odd' => $odd->toArray(),
    ];
});

Route::get('/test-macro', function () {
    $c = collect([
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
        'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
    ]);

    $even = $c->getEven();
    $odd = $c->getOdd();

    return [
        'even' => $even->toArray(),
        'odd' => $odd->toArray(),
    ];
});

Route::get('/test-my-package', function () {
    $myPackageClass = new MyPackageClass();

    return $myPackageClass->doSomethingElse();
});
