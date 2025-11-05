<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVirtualCcCardRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetVirtualCcCardRequest extends AbstractStructBase
{
    /**
     * The MidocoVirtualCcCard
     * Meta information extracted from the WSDL
     * - ref: MidocoVirtualCcCard
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoVirtualCcCard|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoVirtualCcCard $MidocoVirtualCcCard = null;
    /**
     * The isActive
     * @var bool|null
     */
    protected ?bool $isActive = null;
    /**
     * The maxRecords
     * @var int|null
     */
    protected ?int $maxRecords = null;
    /**
     * Constructor method for GetVirtualCcCardRequest
     * @uses GetVirtualCcCardRequest::setMidocoVirtualCcCard()
     * @uses GetVirtualCcCardRequest::setIsActive()
     * @uses GetVirtualCcCardRequest::setMaxRecords()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoVirtualCcCard $midocoVirtualCcCard
     * @param bool $isActive
     * @param int $maxRecords
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoVirtualCcCard $midocoVirtualCcCard = null, ?bool $isActive = null, ?int $maxRecords = null)
    {
        $this
            ->setMidocoVirtualCcCard($midocoVirtualCcCard)
            ->setIsActive($isActive)
            ->setMaxRecords($maxRecords);
    }
    /**
     * Get MidocoVirtualCcCard value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoVirtualCcCard|null
     */
    public function getMidocoVirtualCcCard(): ?\Pggns\MidocoApi\Crm\StructType\MidocoVirtualCcCard
    {
        return $this->MidocoVirtualCcCard;
    }
    /**
     * Set MidocoVirtualCcCard value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoVirtualCcCard $midocoVirtualCcCard
     * @return \Pggns\MidocoApi\Crm\StructType\GetVirtualCcCardRequest
     */
    public function setMidocoVirtualCcCard(?\Pggns\MidocoApi\Crm\StructType\MidocoVirtualCcCard $midocoVirtualCcCard = null): self
    {
        $this->MidocoVirtualCcCard = $midocoVirtualCcCard;
        
        return $this;
    }
    /**
     * Get isActive value
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }
    /**
     * Set isActive value
     * @param bool $isActive
     * @return \Pggns\MidocoApi\Crm\StructType\GetVirtualCcCardRequest
     */
    public function setIsActive(?bool $isActive = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isActive) && !is_bool($isActive)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isActive, true), gettype($isActive)), __LINE__);
        }
        $this->isActive = $isActive;
        
        return $this;
    }
    /**
     * Get maxRecords value
     * @return int|null
     */
    public function getMaxRecords(): ?int
    {
        return $this->maxRecords;
    }
    /**
     * Set maxRecords value
     * @param int $maxRecords
     * @return \Pggns\MidocoApi\Crm\StructType\GetVirtualCcCardRequest
     */
    public function setMaxRecords(?int $maxRecords = null): self
    {
        // validation for constraint: int
        if (!is_null($maxRecords) && !(is_int($maxRecords) || ctype_digit($maxRecords))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxRecords, true), gettype($maxRecords)), __LINE__);
        }
        $this->maxRecords = $maxRecords;
        
        return $this;
    }
}
