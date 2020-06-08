<?php


namespace App\Helpers;

class Container
{
    /**
     * @var null | \DI\Container
     */
    private static $instance = null;

    /**
     * object is created only if the class instance is null
     *
     * @return \DI\Container
     */
    public static function getInstance(): \DI\Container
    {
        if (!self::$instance) {
            self::$instance = new \DI\Container();
        }

        return self::$instance;
    }
}