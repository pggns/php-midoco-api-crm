<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UmbrellaSettlementFeeLocalizationID StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UmbrellaSettlementFeeLocalizationID extends AbstractStructBase
{
    /**
     * The FeeDefinitionID
     * @var int|null
     */
    protected ?int $FeeDefinitionID = null;
    /**
     * The Locale
     * @var string|null
     */
    protected ?string $Locale = null;
    /**
     * Constructor method for UmbrellaSettlementFeeLocalizationID
     * @uses UmbrellaSettlementFeeLocalizationID::setFeeDefinitionID()
     * @uses UmbrellaSettlementFeeLocalizationID::setLocale()
     * @param int $feeDefinitionID
     * @param string $locale
     */
    public function __construct(?int $feeDefinitionID = null, ?string $locale = null)
    {
        $this
            ->setFeeDefinitionID($feeDefinitionID)
            ->setLocale($locale);
    }
    /**
     * Get FeeDefinitionID value
     * @return int|null
     */
    public function getFeeDefinitionID(): ?int
    {
        return $this->FeeDefinitionID;
    }
    /**
     * Set FeeDefinitionID value
     * @param int $feeDefinitionID
     * @return \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationID
     */
    public function setFeeDefinitionID(?int $feeDefinitionID = null): self
    {
        // validation for constraint: int
        if (!is_null($feeDefinitionID) && !(is_int($feeDefinitionID) || ctype_digit($feeDefinitionID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($feeDefinitionID, true), gettype($feeDefinitionID)), __LINE__);
        }
        $this->FeeDefinitionID = $feeDefinitionID;
        
        return $this;
    }
    /**
     * Get Locale value
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return $this->Locale;
    }
    /**
     * Set Locale value
     * @param string $locale
     * @return \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationID
     */
    public function setLocale(?string $locale = null): self
    {
        // validation for constraint: string
        if (!is_null($locale) && !is_string($locale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locale, true), gettype($locale)), __LINE__);
        }
        $this->Locale = $locale;
        
        return $this;
    }
}
