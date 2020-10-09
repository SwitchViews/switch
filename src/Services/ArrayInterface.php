<?php


namespace SwitchViews\Services;

interface ArrayInterface
{
    /**
     * method returns true if the given value in an array and false it not
     *
     * @param $value
     * @return bool
     */
    public function isArray($value): bool;

    /**
     * method returns true if the given array is an associative array and false if not
     *
     * @param array $arr
     * @return bool
     */
    public function isAssoc(array $arr): bool;

    /**
     * method flattens the multi dimensional array into a single dimensional array
     *
     * @param array $arr
     * @return void
     */
    public function flatten(array &$arr): void;

    /**
     * method inserts the specified value at the specified position
     *
     * @param array $arr
     * @param int $position
     * @param $value
     * @return void
     */
    public function insert(array &$arr, int $position, $value): void;

    /**
     * method returns range of items in an array by using the "slicing :" operator
     *
     * @param array $arr
     * @param string $range // "1:", "1:4"
     * @return array
     */
    public function slice(array $arr, string $range): array;

    /**
     * method will push elements onto the end of an array
     *
     * @param array $arr
     * @param mixed ...$elements
     * @return void
     */
    public function append(array &$arr, ...$elements): void;

    /**
     * method will push elements onto the beginning of an array
     *
     * @param array $arr
     * @param mixed ...$elements
     * @return void
     */
    public function prepend(array &$arr, ...$elements): void;

    /**
     * method returns an array that containing the keys of a given array
     *
     * @param array $arr
     * @return array
     */
    public function keys(array $arr): array;

    /**
     * method returns an array that containing the values of a given array
     *
     * @param array $arr
     * @return array
     */
    public function values(array $arr): array;

    /**
     * method returns only the specified key/value pairs from the given array
     *
     * @param array $array
     * @param mixed ...$requiredKeys
     * @return array
     */
    public function only(array $array, ...$requiredKeys): array;

    /**
     * method returns bool whether any item in given set exists in an array using "dot" notation
     *
     * @param array $arr
     * @param mixed $keys
     * @param bool $strictCheck
     * @return bool
     */
    public function has(array $arr, $keys, $strictCheck = true): bool;

    /**
     * method removes the given key/value pair from an array
     *
     * @param array $arr
     * @param mixed ...$keys
     * @return void
     */
    public function remove(array &$arr, ...$keys): void;

    /**
     * method returns the match elements of an array using a callback function
     *
     * @param array $arr
     * @param callable $callback
     * @return array
     */
    public function match(array $arr, callable $callback): array;

    /**
     * method randomly shuffles the items in the array
     *
     * @param array $arr
     * @return void
     */
    public function shuffle(array &$arr): void;

    /**
     * method returns and removes a key value pair from an array
     * default value may be passed as the third argument to the method
     * This value will be returned if the key doesn't exist
     *
     * @param array $arr
     * @param int|string $key
     * @param int|string $default
     * @return mixed
     */
    public function pull(array &$arr, $key, $default);

    /**
     * method returns a random value/values from an array
     *
     * @param array $arr
     * @param int $itemsCount
     * @return mixed
     */
    public function random(array $arr, int $itemsCount);

    /**
     * method retrieves all of the values for a given key from an array using "dot" notation
     *
     * @param array $arr
     * @param mixed ...$keys
     * @return array
     */
    public function pick(array &$arr, ...$keys): void;
}