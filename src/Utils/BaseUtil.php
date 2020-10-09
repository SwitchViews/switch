<?php


namespace SwitchViews\Utils;

/**
 * this holds the util methods.
 * Class BaseUtil
 * @package SwitchViews\utils
 */
class BaseUtil
{
    /**
     * @param string $className
     * @param string $methodName
     * @return bool
     */
    public static function exists(string $className, string $methodName): bool
    {
        $list = array_flip(get_class_methods($className));

        return isset($list[$methodName]);
    }

    /**
     * @param string $key
     * @return array
     */
    public static function convertDotNotationIntoAnArray(string $key): array
    {
        return preg_split('#\.#', $key);
    }
}