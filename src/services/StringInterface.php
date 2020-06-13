<?php


namespace SwitchViews\services;

/**
 * Interface StringInterface
 * @package SwitchViews\services
 */
interface StringInterface
{
    /**
     * to check whether the passed value is an String or not.
     *
     * @param $value
     * @return bool
     */
    public function isString($value): bool;

}