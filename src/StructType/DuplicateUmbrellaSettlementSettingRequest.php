<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DuplicateUmbrellaSettlementSettingRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DuplicateUmbrellaSettlementSettingRequest extends AbstractStructBase
{
    /**
     * The SettingID
     * Meta information extracted from the WSDL
     * - documentation: The ID of the settlement setting to duplicate.
     * @var int|null
     */
    protected ?int $SettingID = null;
    /**
     * The ValidFrom
     * Meta information extracted from the WSDL
     * - documentation: The Valid from date for the new settlement setting.<br> The valid from date will be the first day of the month of the given date.
     * @var string|null
     */
    protected ?string $ValidFrom = null;
    /**
     * The Percent
     * Meta information extracted from the WSDL
     * - documentation: Percent price increase.<br> If not specified, the prices are not modified.
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $Percent = null;
    /**
     * The NbDecimalsPrice
     * Meta information extracted from the WSDL
     * - documentation: Number of decimals for the new monetary amounts in prices.<br> If not specified, the number of decimals is taken from the invoice setting 'nb_decimals_price'.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $NbDecimalsPrice = null;
    /**
     * The NbDecimalsStagger
     * Meta information extracted from the WSDL
     * - documentation: Number of decimals for the new monetary amounts in staggers.<br> If not specified, the number of decimals is taken from the invoice setting 'nb_decimals_price'.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $NbDecimalsStagger = null;
    /**
     * Constructor method for DuplicateUmbrellaSettlementSettingRequest
     * @uses DuplicateUmbrellaSettlementSettingRequest::setSettingID()
     * @uses DuplicateUmbrellaSettlementSettingRequest::setValidFrom()
     * @uses DuplicateUmbrellaSettlementSettingRequest::setPercent()
     * @uses DuplicateUmbrellaSettlementSettingRequest::setNbDecimalsPrice()
     * @uses DuplicateUmbrellaSettlementSettingRequest::setNbDecimalsStagger()
     * @param int $settingID
     * @param string $validFrom
     * @param float $percent
     * @param int $nbDecimalsPrice
     * @param int $nbDecimalsStagger
     */
    public function __construct(?int $settingID = null, ?string $validFrom = null, ?float $percent = null, ?int $nbDecimalsPrice = null, ?int $nbDecimalsStagger = null)
    {
        $this
            ->setSettingID($settingID)
            ->setValidFrom($validFrom)
            ->setPercent($percent)
            ->setNbDecimalsPrice($nbDecimalsPrice)
            ->setNbDecimalsStagger($nbDecimalsStagger);
    }
    /**
     * Get SettingID value
     * @return int|null
     */
    public function getSettingID(): ?int
    {
        return $this->SettingID;
    }
    /**
     * Set SettingID value
     * @param int $settingID
     * @return \Pggns\MidocoApi\Crm\StructType\DuplicateUmbrellaSettlementSettingRequest
     */
    public function setSettingID(?int $settingID = null): self
    {
        // validation for constraint: int
        if (!is_null($settingID) && !(is_int($settingID) || ctype_digit($settingID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settingID, true), gettype($settingID)), __LINE__);
        }
        $this->SettingID = $settingID;
        
        return $this;
    }
    /**
     * Get ValidFrom value
     * @return string|null
     */
    public function getValidFrom(): ?string
    {
        return $this->ValidFrom;
    }
    /**
     * Set ValidFrom value
     * @param string $validFrom
     * @return \Pggns\MidocoApi\Crm\StructType\DuplicateUmbrellaSettlementSettingRequest
     */
    public function setValidFrom(?string $validFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validFrom, true), gettype($validFrom)), __LINE__);
        }
        $this->ValidFrom = $validFrom;
        
        return $this;
    }
    /**
     * Get Percent value
     * @return float|null
     */
    public function getPercent(): ?float
    {
        return $this->Percent;
    }
    /**
     * Set Percent value
     * @param float $percent
     * @return \Pggns\MidocoApi\Crm\StructType\DuplicateUmbrellaSettlementSettingRequest
     */
    public function setPercent(?float $percent = null): self
    {
        // validation for constraint: float
        if (!is_null($percent) && !(is_float($percent) || is_numeric($percent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percent, true), gettype($percent)), __LINE__);
        }
        $this->Percent = $percent;
        
        return $this;
    }
    /**
     * Get NbDecimalsPrice value
     * @return int|null
     */
    public function getNbDecimalsPrice(): ?int
    {
        return $this->NbDecimalsPrice;
    }
    /**
     * Set NbDecimalsPrice value
     * @param int $nbDecimalsPrice
     * @return \Pggns\MidocoApi\Crm\StructType\DuplicateUmbrellaSettlementSettingRequest
     */
    public function setNbDecimalsPrice(?int $nbDecimalsPrice = null): self
    {
        // validation for constraint: int
        if (!is_null($nbDecimalsPrice) && !(is_int($nbDecimalsPrice) || ctype_digit($nbDecimalsPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nbDecimalsPrice, true), gettype($nbDecimalsPrice)), __LINE__);
        }
        $this->NbDecimalsPrice = $nbDecimalsPrice;
        
        return $this;
    }
    /**
     * Get NbDecimalsStagger value
     * @return int|null
     */
    public function getNbDecimalsStagger(): ?int
    {
        return $this->NbDecimalsStagger;
    }
    /**
     * Set NbDecimalsStagger value
     * @param int $nbDecimalsStagger
     * @return \Pggns\MidocoApi\Crm\StructType\DuplicateUmbrellaSettlementSettingRequest
     */
    public function setNbDecimalsStagger(?int $nbDecimalsStagger = null): self
    {
        // validation for constraint: int
        if (!is_null($nbDecimalsStagger) && !(is_int($nbDecimalsStagger) || ctype_digit($nbDecimalsStagger))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nbDecimalsStagger, true), gettype($nbDecimalsStagger)), __LINE__);
        }
        $this->NbDecimalsStagger = $nbDecimalsStagger;
        
        return $this;
    }
}
