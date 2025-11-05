<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for Direction EnumType
 * @subpackage Enumerations
 */
class Direction extends AbstractStructEnumBase
{
    /**
     * Constant for value 'TOP'
     * @return string 'TOP'
     */
    const VALUE_TOP = 'TOP';
    /**
     * Constant for value 'UP'
     * @return string 'UP'
     */
    const VALUE_UP = 'UP';
    /**
     * Constant for value 'DOWN'
     * @return string 'DOWN'
     */
    const VALUE_DOWN = 'DOWN';
    /**
     * Constant for value 'BOTTOM'
     * @return string 'BOTTOM'
     */
    const VALUE_BOTTOM = 'BOTTOM';
    /**
     * Return allowed values
     * @uses self::VALUE_TOP
     * @uses self::VALUE_UP
     * @uses self::VALUE_DOWN
     * @uses self::VALUE_BOTTOM
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_TOP,
            self::VALUE_UP,
            self::VALUE_DOWN,
            self::VALUE_BOTTOM,
        ];
    }
}
