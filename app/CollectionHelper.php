<?php

namespace App;

use Illuminate\Support\Collection;

class CollectionHelper
{

    public static function getEven(Collection $collection): Collection
    {
        return $collection->where(function ($item, $key) {
            if (!is_int($key)) {
                throw new \Exception(
                    'This can only be used by collections with integer keys',
                );
            }

            return $key % 2 === 0;
        })->values();
    }


    public static function getOdd(Collection $collection): Collection
    {
        return $collection->where(function ($item, $key) {
            if (!is_int($key)) {
                throw new \Exception(
                    'This can only be used by collections with integer keys',
                );
            }

            return $key % 2 !== 0;
        })->values();
    }

}
