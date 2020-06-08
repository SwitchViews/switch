<?php

namespace App\Helpers\Services;

class ArrayManager
{
    /**
     * Returns TRUE if var is an array, FALSE otherwise.
     * @param array $value
     * @return bool
     */
    public function isArray(array $value): bool
    {
        if (count($value) === 0) {
            return false;
        }
        return is_array($value[0]);
    }
}