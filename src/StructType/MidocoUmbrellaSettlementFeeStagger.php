<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoUmbrellaSettlementFeeStagger StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoUmbrellaSettlementFeeStagger extends UmbrellaSettlementFeeStaggerDTO
{
    /**
     * The maxAmount
     * Meta information extracted from the WSDL
     * - documentation: The max amount is not saved.<br> It is calculated as <var>minAmount - 1</var> of the next stagger or left empty if there is no next stagger.
     * @var int|null
     */
    protected ?int $maxAmount = null;
    /**
     * Constructor method for MidocoUmbrellaSettlementFeeStagger
     * @uses MidocoUmbrellaSettlementFeeStagger::setMaxAmount()
     * @param int $maxAmount
     */
    public function __construct(?int $maxAmount = null)
    {
        $this
            ->setMaxAmount($maxAmount);
    }
    /**
     * Get maxAmount value
     * @return int|null
     */
    public function getMaxAmount(): ?int
    {
        return $this->maxAmount;
    }
    /**
     * Set maxAmount value
     * @param int $maxAmount
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeStagger
     */
    public function setMaxAmount(?int $maxAmount = null): self
    {
        // validation for constraint: int
        if (!is_null($maxAmount) && !(is_int($maxAmount) || ctype_digit($maxAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxAmount, true), gettype($maxAmount)), __LINE__);
        }
        $this->maxAmount = $maxAmount;
        
        return $this;
    }
}
