<?php


namespace SwitchViews\facades;


use DI\DependencyException;
use DI\NotFoundException;
use InvalidArgumentException;
use SwitchViews\Container;
use SwitchViews\services\ArrayInterface;
use SwitchViews\services\StringInterface;
use SwitchViews\utils\BaseUtil;

class BaseFacade
{
    /**
     * @var string
     */
    protected static $serviceName;

    /**
     * this method provides access to an object from the container
     * calls the appropriate method
     *
     * @param string $methodName
     * @param array $arguments
     * @return array|string|object|int|float| bool| null
     * @throws DependencyException
     * @throws NotFoundException
     */
    public static function __callStatic(string $methodName, array $arguments)
    {

        $service = Container::getInstance()->get(static::$serviceName);

        if (!BaseUtil::exists(static::$serviceName, $methodName)) {
            throw new InvalidArgumentException("requested {$methodName} method is not available");
        }

        switch ($service) {
            case $service instanceof ArrayInterface || $service instanceof StringInterface:
                return $service->$methodName(...$arguments);
                break;
            default:
                throw new InvalidArgumentException(sprintf("%s service is not an instance of ArrInterface", get_class($service)));
        }
    }
}