<?php


namespace SwitchViews\Facades;

use SwitchViews\Container;
use SwitchViews\Services\ArrayManager;
use DI\DependencyException;
use DI\NotFoundException;

/**
 * static interface to an ArrayManager class
 * Class Arr
 * @package SwitchViews\Facades
 */
class Arr
{
    /**
     * this method provides access to an object from the container
     * calls the appropriate method
     *
     * @method static ArrayManager isArray(array|string|object|null $value)
     * @param string $methodName
     * @param array $arguments
     * @return array|string|object|int|float| bool| null
     * @throws DependencyException
     * @throws NotFoundException
     */
    public static function __callStatic(string $methodName, array $arguments)
    {
        return Container::getInstance()->get(ArrayManager::class)
            ->$methodName(...$arguments);
    }
}