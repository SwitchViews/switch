<?php


namespace App\Helpers\Facades;

use App\Helpers\Container;
use App\Helpers\Services\ArrayManager;
use DI\DependencyException;
use DI\NotFoundException;

/**
 * static interface to an ArrayManager class
 * Class Arr
 * @package App\Helpers\Facades
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
     * @return mixed
     * @throws DependencyException
     * @throws NotFoundException
     */
    public static function __callStatic(string $methodName, array $arguments)
    {
        return Container::getInstance()->get(ArrayManager::class)
            ->$methodName(...$arguments);
    }
}