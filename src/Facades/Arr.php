<?php


namespace App\Helpers\Facades;

use App\Helpers\Container;
use App\Helpers\Services\ArrayManager;
use DI\DependencyException;
use DI\NotFoundException;

class Arr
{
    /**
     * @method static ArrayManager isArray(array|string|object|null $value)
     * @param $method
     * @param $arguments
     * @return mixed
     * @throws DependencyException
     * @throws NotFoundException
     */
    public static function __callStatic($method, $arguments)
    {
        return Container::getInstance()->get(ArrayManager::class)
            ->$method($arguments);
    }
}