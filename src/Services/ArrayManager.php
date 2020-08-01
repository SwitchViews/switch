<?php

namespace SwitchViews\Services;

use Exception;
use SwitchViews\Utils\BaseUtil;

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

    /**
     * method returns true if the given array is an associative array and false if not
     *
     * @param array $arr
     * @return bool
     */
    public function isAssoc(array $arr): bool
    {
        if (empty($arr)) {
            return false;
        }
        return array_keys($arr) != range(0, count($arr) - 1);
    }

    /**
     * method flattens the multi dimensional array into a single dimensional array
     *
     * @param array $arr
     * @return void
     */
    public function flatten(array &$arr): void
    {
        // TODO: Implement flatten() method.
    }

    /**
     * method inserts the specified value at the specified position
     *
     * @param array $arr
     * @param $position
     * @param $value
     * @return void
     */
    public function insert(array &$arr, $position, $value): void
    {
        if (!isset($arr[$position])) {
            $arr[$position] = $value;
            return;
        }
        if ($this->isAssoc($arr)) {
            $arr += [$position => $value];
            return;
        }

        for ($i = $position; $i < count($arr); $i++) {
            $nextVal = $arr[$i];
            $arr[$i] = $value;
            $value = $nextVal;
        }
        $arr[] = $value;
    }

    /**
     * method returns range of items in an array by using the "slicing :" operator
     *
     * @param array $arr
     * @param string $range // "1:", "1:4"
     * @return array
     */
    public function slice(array $arr, string $range): array
    {
        $split = explode(":", $range);
        $offset = $split[0];
        $length = trim($split[1]) === "" ? count($arr) - $offset : $split[1];
        return array_slice($arr, $offset, $length);
    }

    /**
     * method will push elements onto the end of an array
     *
     * @param array $arr
     * @param mixed ...$elements
     * @return void
     */
    public function append(array &$arr, ...$elements): void
    {
        $arr = array_merge($arr, $elements);
    }

    /**
     * method will push elements onto the beginning of an array
     *
     * @param array $arr
     * @param mixed ...$elements
     * @return void
     */
    public function prepend(array &$arr, ...$elements): void
    {
        $arr = array_merge($elements, $arr);
    }

    /**
     * method returns only the specified key/value pairs from the given array
     *
     * @param array $array
     * @param mixed ...$requiredKeys
     * @return array
     */
    public function only(array $array, ...$requiredKeys): array
    {
        $resultArray = [];
        foreach ($requiredKeys as $key) {
            if (isset($array[$key])) {
                $resultArray[$key] = $array[$key];
            }
        }
        return $resultArray;
    }

    /**
     * method returns bool whether any item in given set exists in an array using "dot" notation
     *
     * @param array $arr
     * @param mixed $keys
     * @param bool $strictCheck
     * @return bool
     */
    public function has(array $arr, $keys, $strictCheck = true): bool
    {
        // TODO: Implement has() method.
    }

    /**
     * method removes the given key/value pair from an array
     *
     * @param array $arr
     * @param mixed ...$keys
     * @return void
     */
    public function remove(array &$arr, ...$keys): void
    {
        foreach ($keys as $key) {
            if (isset($arr[$key])) {
                unset($arr[$key]);
            }
        }
    }

    /**
     * method returns the match elements of an array using a callback function
     *
     * @param array $arr
     * @param callable $callback
     * @return array
     */
    public function match(array $arr, callable $callback): array
    {
        // TODO: Implement match() method.
    }

    /**
     * method randomly shuffles the items in the array
     *
     * @param array $arr
     * @return void
     */
    public function shuffle(array &$arr): void
    {
        shuffle($arr);
    }

    /**
     * method returns and removes a key value pair from an array
     * default value may be passed as the third argument to the method
     * This value will be returned if the key doesn't exist
     *
     * @param array $arr
     * @param int|string $key
     * @param int|string $default
     * @return mixed
     * @throws Exception
     */
    public function pull(array &$arr, $key, $default)
    {
        $keys = BaseUtil::convertDotNotationIntoAnArray($key);
        if (count($keys)) {
            $value = $arr[$keys[0]];
            unset($arr[$keys[0]], $keys[0]);
            foreach ($keys as $key) {
                if (isset($value[$key])) {
                    $value = $value[$key];
                } else {
                    return $default;
                }
            }
        } else {
            return $default;
        }
        return [$key => $value];
    }


    /**
     * method returns a random value/values from an array
     *
     * @param array $arr
     * @param int $itemsCount
     * @return mixed
     */
    public function random(array $arr, int $itemsCount)
    {
        // TODO: Implement random() method.
    }

    /**
     * method retrieves all of the values for a given key from an array using "dot" notation
     *
     * @param array $arr
     * @param mixed ...$keys
     * @return array
     */
    public function pick(array &$arr, ...$keys): void
    {
        // TODO: Implement pick() method.
    }

    /**
     * method returns an array that containing the keys of a given array
     *
     * @param array $arr
     * @return array
     */
    public function keys(array $arr): array
    {
        return array_keys($arr);
    }

    /**
     * method returns an array that containing the values of a given array
     *
     * @param array $arr
     * @return array
     */
    public function values(array $arr): array
    {
        return array_values($arr);
    }
}