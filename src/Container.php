<?php


namespace App\Helpers;

use DI\Container as DIContainer;

class Container
{
    /**
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