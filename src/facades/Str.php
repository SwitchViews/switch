<?php


namespace SwitchViews\facades;

use SwitchViews\services\ArrayManager;
use SwitchViews\services\StringManager;

/**
 * static interface to an ArrayManager class
 *
 * Class Str
 * @package SwitchViews\Facades
 * @method static ArrayManager isString(array|string|object|null $value)
 */
class Str extends BaseFacade
{
    /**
     * @var string
     */
    protected static $serviceName = StringManager::class;
}