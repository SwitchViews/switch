<?php

namespace SwitchViews\Services;

/**
 * Class that holds Array Helper methods.
 * Class ArrayManager
 *
 * @package SwitchViews\Services
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