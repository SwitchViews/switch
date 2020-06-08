<?php


namespace App\Helpers;

use DI\Container as DIContainer;

/**
 * Singleton class
 * Class Container is responsible for DIContainer object creation.
 *
 * @package App\Helpers
 */
class Container
{
    /**
     * Hold the class instance
     *
     * @var null | DIContainer
     */
    private static $instance = null;

    /**
     * object is created only if the class instance is null
     *
     * @return DIContainer
     */
    public static function getInstance(): DIContainer
    {
        if (!self::$instance) {
            self::$instance = new DIContainer();
        }

        return self::$instance;
    }
}