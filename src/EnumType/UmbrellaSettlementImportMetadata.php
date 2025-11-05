<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for UmbrellaSettlementImportMetadata EnumType
 * @subpackage Enumerations
 */
class UmbrellaSettlementImportMetadata extends AbstractStructEnumBase
{
    /**
     * Constant for value 'File'
     * @return string 'File'
     */
    const VALUE_FILE = 'File';
    /**
     * Constant for value 'Columns'
     * @return string 'Columns'
     */
    const VALUE_COLUMNS = 'Columns';
    /**
     * Constant for value 'Lines'
     * @return string 'Lines'
     */
    const VALUE_LINES = 'Lines';
    /**
     * Return allowed values
     * @uses self::VALUE_FILE
     * @uses self::VALUE_COLUMNS
     * @uses self::VALUE_LINES
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_FILE,
            self::VALUE_COLUMNS,
            self::VALUE_LINES,
        ];
    }
}
