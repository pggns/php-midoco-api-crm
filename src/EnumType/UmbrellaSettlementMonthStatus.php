<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for UmbrellaSettlementMonthStatus EnumType
 * @subpackage Enumerations
 */
class UmbrellaSettlementMonthStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ISSUES'
     * Meta information extracted from the WSDL
     * - documentation: There are configuration issues.<br> <em>This status is not yet available, because detecting all possible issues is complicated and computationally time consuming.
     * @return string 'ISSUES'
     */
    const VALUE_ISSUES = 'ISSUES';
    /**
     * Constant for value 'IMPORT'
     * Meta information extracted from the WSDL
     * - documentation: Nothing is imported.
     * @return string 'IMPORT'
     */
    const VALUE_IMPORT = 'IMPORT';
    /**
     * Constant for value 'VALIDATION'
     * Meta information extracted from the WSDL
     * - documentation: At least one import is not validated.
     * @return string 'VALIDATION'
     */
    const VALUE_VALIDATION = 'VALIDATION';
    /**
     * Constant for value 'PREPARATION'
     * Meta information extracted from the WSDL
     * - documentation: Something is not prepared.
     * @return string 'PREPARATION'
     */
    const VALUE_PREPARATION = 'PREPARATION';
    /**
     * Constant for value 'UPLOAD'
     * Meta information extracted from the WSDL
     * - documentation: At least one settlement is prepared, but not uploaded.
     * @return string 'UPLOAD'
     */
    const VALUE_UPLOAD = 'UPLOAD';
    /**
     * Constant for value 'COMPLETE'
     * Meta information extracted from the WSDL
     * - documentation: Nothing left to.<br> <em>Hopefully, because this status will be chosen if no other status applies.</em>
     * @return string 'COMPLETE'
     */
    const VALUE_COMPLETE = 'COMPLETE';
    /**
     * Return allowed values
     * @uses self::VALUE_ISSUES
     * @uses self::VALUE_IMPORT
     * @uses self::VALUE_VALIDATION
     * @uses self::VALUE_PREPARATION
     * @uses self::VALUE_UPLOAD
     * @uses self::VALUE_COMPLETE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ISSUES,
            self::VALUE_IMPORT,
            self::VALUE_VALIDATION,
            self::VALUE_PREPARATION,
            self::VALUE_UPLOAD,
            self::VALUE_COMPLETE,
        ];
    }
}
