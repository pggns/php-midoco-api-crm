<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CustomerStatus EnumType
 * Meta information extracted from the WSDL
 * - documentation: <p>Indicates whether the customer is deleted or locked.</p> <p>If a customer is locked and deleted, the status is deleted because it weighs heavier than the status locked.</p> <p>While you can create a settlement for a locked
 * customer, you cannot create one for a deleted customer.</p>
 * @subpackage Enumerations
 */
class CustomerStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'UNDEFINED'
     * @return string 'UNDEFINED'
     */
    const VALUE_UNDEFINED = 'UNDEFINED';
    /**
     * Constant for value 'OK'
     * @return string 'OK'
     */
    const VALUE_OK = 'OK';
    /**
     * Constant for value 'NO_ID'
     * @return string 'NO_ID'
     */
    const VALUE_NO_ID = 'NO_ID';
    /**
     * Constant for value 'LOCKED'
     * @return string 'LOCKED'
     */
    const VALUE_LOCKED = 'LOCKED';
    /**
     * Constant for value 'DELETED'
     * @return string 'DELETED'
     */
    const VALUE_DELETED = 'DELETED';
    /**
     * Return allowed values
     * @uses self::VALUE_UNDEFINED
     * @uses self::VALUE_OK
     * @uses self::VALUE_NO_ID
     * @uses self::VALUE_LOCKED
     * @uses self::VALUE_DELETED
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_UNDEFINED,
            self::VALUE_OK,
            self::VALUE_NO_ID,
            self::VALUE_LOCKED,
            self::VALUE_DELETED,
        ];
    }
}
