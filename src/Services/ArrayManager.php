<?php

namespace App\Helpers\Services;

/**
 * Class that holds the Business logic
 * Class ArrayManager
 *
 * @package App\Helpers\Services
 */
class ArrayManager
{
    /**
     * isArray method determines whether the passed value is an Array
     * can accepts any data type
     * Returns TRUE if $value is an array, FALSE otherwise.
     *
     * @param mixed $value
     * @return bool
     */
    public function isArray($value): bool
    {
        return is_array($value);
    }
}