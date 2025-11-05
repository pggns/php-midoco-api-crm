<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for BexioSynchronizationChangeArea EnumType
 * @subpackage Enumerations
 */
class BexioSynchronizationChangeArea extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Customer'
     * @return string 'Customer'
     */
    const VALUE_CUSTOMER = 'Customer';
    /**
     * Constant for value 'CrmAddress'
     * @return string 'CrmAddress'
     */
    const VALUE_CRM_ADDRESS = 'CrmAddress';
    /**
     * Constant for value 'ContactEntries'
     * @return string 'ContactEntries'
     */
    const VALUE_CONTACT_ENTRIES = 'ContactEntries';
    /**
     * Constant for value 'CrmCriteria'
     * @return string 'CrmCriteria'
     */
    const VALUE_CRM_CRITERIA = 'CrmCriteria';
    /**
     * Return allowed values
     * @uses self::VALUE_CUSTOMER
     * @uses self::VALUE_CRM_ADDRESS
     * @uses self::VALUE_CONTACT_ENTRIES
     * @uses self::VALUE_CRM_CRITERIA
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CUSTOMER,
            self::VALUE_CRM_ADDRESS,
            self::VALUE_CONTACT_ENTRIES,
            self::VALUE_CRM_CRITERIA,
        ];
    }
}
