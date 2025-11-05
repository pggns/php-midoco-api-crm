<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for UmbrellaSettlementImportFormat EnumType
 * @subpackage Enumerations
 */
class UmbrellaSettlementImportFormat extends AbstractStructEnumBase
{
    /**
     * Constant for value 'CSV'
     * @return string 'CSV'
     */
    const VALUE_CSV = 'CSV';
    /**
     * Constant for value 'Excel'
     * @return string 'Excel'
     */
    const VALUE_EXCEL = 'Excel';
    /**
     * Return allowed values
     * @uses self::VALUE_CSV
     * @uses self::VALUE_EXCEL
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CSV,
            self::VALUE_EXCEL,
        ];
    }
}
