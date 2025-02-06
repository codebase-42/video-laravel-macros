<?php

namespace App\Mixins;

class CollectionMixin
{
    public function getEven(): \Closure
    {
        return function () {
            return $this->where(function ($item, $key) {
                if (!is_int($key)) {
                    throw new \Exception(
                        'This can only be used by collections with integer keys',
                    );
                }

                return $key % 2 === 0;
            })->values();
        };
    }

    public function getOdd(): \Closure
    {
        return function () {
            return $this->where(function ($item, $key) {
                if (!is_int($key)) {
                    throw new \Exception(
                        'This can only be used by collections with integer keys',
                    );
                }

                return $key % 2 !== 0;
            })->values();
        };
    }
}
