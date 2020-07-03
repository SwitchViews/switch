<?php

namespace SwitchViews\Services;

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
     * @inheritDoc
     */
    public function isAssoc(array $arr): bool
    {
        // TODO: Implement isAssoc() method.
    }

    /**
     * @inheritDoc
     */
    public function flatten(array &$arr): void
    {
        // TODO: Implement flatten() method.
    }

    /**
     * @inheritDoc
     */
    public function insert(array &$arr, int $position, $value): void
    {
        // TODO: Implement insert() method.
    }

    /**
     * @inheritDoc
     */
    public function slice(array $arr, string $range): array
    {
        // TODO: Implement slice() method.
    }

    /**
     * @inheritDoc
     */
    public function append(array $arr, ...$elements): array
    {
        // TODO: Implement append() method.
    }

    /**
     * @inheritDoc
     */
    public function prepend(array $arr, ...$elements): array
    {
        // TODO: Implement prepend() method.
    }

    /**
     * @inheritDoc
     */
    public function divide(array $arr): array
    {
        // TODO: Implement divide() method.
    }

    /**
     * @inheritDoc
     */
    public function only(array $array, ...$requiredKeys): array
    {
        // TODO: Implement only() method.
    }

    /**
     * @inheritDoc
     */
    public function has(array $arr, $keys, $strictCheck = true): bool
    {
        // TODO: Implement has() method.
    }

    /**
     * @inheritDoc
     */
    public function hasKey(array $arr, string $key): bool
    {
        // TODO: Implement hasKey() method.
    }

    /**
     * @inheritDoc
     */
    public function remove(array $arr, ...$keys): array
    {
        // TODO: Implement remove() method.
    }

    /**
     * @inheritDoc
     */
    public function match(array $arr, callable $callback): array
    {
        // TODO: Implement match() method.
    }

    /**
     * @inheritDoc
     */
    public function sort(array $arr, callable $callable = null): array
    {
        // TODO: Implement sort() method.
    }

    /**
     * @inheritDoc
     */
    public function shuffle(array $arr): array
    {
        // TODO: Implement shuffle() method.
    }

    /**
     * @inheritDoc
     */
    public function pop(array &$arr, int $position): void
    {
        // TODO: Implement pop() method.
    }

    /**
     * @inheritDoc
     */
    public function pull(array $arr, $key, $default)
    {
        // TODO: Implement pull() method.
    }

    /**
     * @inheritDoc
     */
    public function random(array $arr, int $itemsCount)
    {
        // TODO: Implement random() method.
    }

    /**
     * @inheritDoc
     */
    public function pickN(array $arr, ...$keys): array
    {
        // TODO: Implement pickN() method.
    }

    /**
     * @inheritDoc
     */
    public function forgetN(array $arr, string $str): array
    {
        // TODO: Implement forgetN() method.
    }

    /**
     * @inheritDoc
     */
    public function getN(array $arr, string $notation, $defaultValue = null)
    {
        // TODO: Implement getN() method.
    }
}