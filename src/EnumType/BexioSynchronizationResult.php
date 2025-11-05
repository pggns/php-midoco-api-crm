<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for BexioSynchronizationResult EnumType
 * @subpackage Enumerations
 */
class BexioSynchronizationResult extends AbstractStructEnumBase
{
    /**
     * Constant for value 'FAILED'
     * @return string 'FAILED'
     */
    const VALUE_FAILED = 'FAILED';
    /**
     * Constant for value 'SKIPPED'
     * @return string 'SKIPPED'
     */
    const VALUE_SKIPPED = 'SKIPPED';
    /**
     * Constant for value 'SUCCESS'
     * @return string 'SUCCESS'
     */
    const VALUE_SUCCESS = 'SUCCESS';
    /**
     * Return allowed values
     * @uses self::VALUE_FAILED
     * @uses self::VALUE_SKIPPED
     * @uses self::VALUE_SUCCESS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_FAILED,
            self::VALUE_SKIPPED,
            self::VALUE_SUCCESS,
        ];
    }
}
