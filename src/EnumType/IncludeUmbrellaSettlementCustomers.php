<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for IncludeUmbrellaSettlementCustomers EnumType
 * @subpackage Enumerations
 */
class IncludeUmbrellaSettlementCustomers extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Selected-Customers'
     * @return string 'Selected-Customers'
     */
    const VALUE_SELECTED_CUSTOMERS = 'Selected-Customers';
    /**
     * Constant for value 'Available-Customers'
     * @return string 'Available-Customers'
     */
    const VALUE_AVAILABLE_CUSTOMERS = 'Available-Customers';
    /**
     * Constant for value 'Removed-Customers'
     * @return string 'Removed-Customers'
     */
    const VALUE_REMOVED_CUSTOMERS = 'Removed-Customers';
    /**
     * Return allowed values
     * @uses self::VALUE_SELECTED_CUSTOMERS
     * @uses self::VALUE_AVAILABLE_CUSTOMERS
     * @uses self::VALUE_REMOVED_CUSTOMERS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SELECTED_CUSTOMERS,
            self::VALUE_AVAILABLE_CUSTOMERS,
            self::VALUE_REMOVED_CUSTOMERS,
        ];
    }
}
