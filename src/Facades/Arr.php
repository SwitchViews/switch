<?php


namespace SwitchViews\Facades;

use SwitchViews\Services\ArrayManager;

/**
 * static interface to an ArrayManager class
 *
 * Class Arr
 * @package SwitchViews\Facades
 * @method static ArrayManager isArray(array|string|object|null $value)
 * @method static ArrayManager add(array $arr, ...$values)
 */
class Arr extends BaseFacade
{
    /**
     * @var string
     */
    protected static $serviceName = ArrayManager::class;
}