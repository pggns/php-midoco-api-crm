<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SettlementSettingStatus EnumType
 * @subpackage Enumerations
 */
class SettlementSettingStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'MISSING'
     * @return string 'MISSING'
     */
    const VALUE_MISSING = 'MISSING';
    /**
     * Constant for value 'PRESENT'
     * @return string 'PRESENT'
     */
    const VALUE_PRESENT = 'PRESENT';
    /**
     * Constant for value 'ERRONEOUS'
     * @return string 'ERRONEOUS'
     */
    const VALUE_ERRONEOUS = 'ERRONEOUS';
    /**
     * Return allowed values
     * @uses self::VALUE_MISSING
     * @uses self::VALUE_PRESENT
     * @uses self::VALUE_ERRONEOUS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MISSING,
            self::VALUE_PRESENT,
            self::VALUE_ERRONEOUS,
        ];
    }
}
