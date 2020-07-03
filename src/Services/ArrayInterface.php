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
     * @return array
     */
    public function append(array $arr, ...$elements): array;

    /**
     * method will push elements onto the beginning of an array
     *
     * @param array $arr
     * @param mixed ...$elements
     * @return array
     */
    public function prepend(array $arr, ...$elements): array;

    /**
     * method returns two arrays, one containing the keys, and the other containing the values of the given array
     *
     * @param array $arr
     * @return array
     */
    public function divide(array $arr): array;


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
     * method returns bool when the given key exists in an array
     *
     * @param array $arr
     * @param string $key
     * @return bool
     */
    public function hasKey(array $arr, string $key): bool;

    /**
     * method removes the given key/value pair from an array
     *
     * @param array $arr
     * @param mixed ...$keys
     * @return array
     */
    public function remove(array $arr, ...$keys): array;

    /**
     * method returns the match elements of an array using a callback function
     *
     * @param array $arr
     * @param callable $callback
     * @return array
     */
    public function match(array $arr, callable $callback): array;


    /**
     * method sorts an array by its values and it also sort by the given closure
     *
     * @param array $arr
     * @param callable|null $callable
     * @return array
     */
    public function sort(array $arr, callable $callable = null): array; // TODO: not needed.

    /**
     * method randomly shuffles the items in the array
     *
     * @param array $arr
     * @return array
     */
    public function shuffle(array $arr): array;   //TODO: not needed.

    /**
     * method Removes the element  from an array at the specified position
     *
     * @param array $arr
     * @param int $position
     * @return void
     */
    public function pop(array &$arr, int $position): void;

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
    public function pull(array $arr, $key, $default);

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
    public function pickN(array $arr, ...$keys): array;

    /**
     * method removes a given key/value pair from a nested array using "dot" notation
     *
     * @param array $arr
     * @param string $str
     * @return array
     */
    public function forgetN(array $arr, string $str): array;

    /**
     * method retrieves a value from a deeply nested array using "dot" notation
     *
     * @param array $arr
     * @param string $notation
     * @param null|mixed $defaultValue
     * @return null|mixed
     */
    public function getN(array $arr, string $notation, $defaultValue = null);
}