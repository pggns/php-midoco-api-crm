<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for BexioSynchronizationAction EnumType
 * @subpackage Enumerations
 */
class BexioSynchronizationAction extends AbstractStructEnumBase
{
    /**
     * Constant for value 'IMPORT'
     * @return string 'IMPORT'
     */
    const VALUE_IMPORT = 'IMPORT';
    /**
     * Constant for value 'UPDATE'
     * @return string 'UPDATE'
     */
    const VALUE_UPDATE = 'UPDATE';
    /**
     * Constant for value 'LOCK'
     * @return string 'LOCK'
     */
    const VALUE_LOCK = 'LOCK';
    /**
     * Return allowed values
     * @uses self::VALUE_IMPORT
     * @uses self::VALUE_UPDATE
     * @uses self::VALUE_LOCK
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_IMPORT,
            self::VALUE_UPDATE,
            self::VALUE_LOCK,
        ];
    }
}
