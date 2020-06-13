<?php


namespace SwitchViews\services;

interface ArrayInterface
{
    /**
     * to check whether the passed value is an Array or not.
     *
     * @param $value
     * @return bool
     */
    public function isArray($value): bool;

    /**
     * @param array $arr
     * @param mixed ...$values
     * @return array
     */
    public function add(array $arr, ...$values): array;

    /**
     * @param array $arr
     * @param string $key
     * @return mixed
     */
    public function get(array $arr, string $key);

    /**
     * @param array $arr
     * @param string $key
     * @return bool
     */
    public function hasKey(array $arr, string $key): bool;

}