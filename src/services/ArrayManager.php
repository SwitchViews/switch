<?php

namespace SwitchViews\services;

/**
 * Class that holds Array Helper methods.
 * Class ArrayManager
 *
 * @package SwitchViews\Services
 */
class ArrayManager implements ArrayInterface
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

    public function add(array $arr, ...$values): array
    {
        // TODO: Implement add() method.
    }

    public function get(array $arr, string $key)
    {
        // TODO: Implement get() method.
    }

    public function hasKey(array $arr, string $key): bool
    {
        // TODO: Implement hasKey() method.
    }
}