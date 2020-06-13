<?php


namespace SwitchViews\services;


class StringManager implements StringInterface
{

    /**
     * This function returns true if the variable is of type string, otherwise it returns false.
     *
     * @param $value
     * @return bool
     */
    public function isString($value): bool
    {
        return is_string($value);
    }
}