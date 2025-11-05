<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteUmbrellaSettlementSettingRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteUmbrellaSettlementSettingRequest extends AbstractStructBase
{
    /**
     * The CustomerID
     * @var int|null
     */
    protected ?int $CustomerID = null;
    /**
     * The SettingID
     * @var int|null
     */
    protected ?int $SettingID = null;
    /**
     * Constructor method for DeleteUmbrellaSettlementSettingRequest
     * @uses DeleteUmbrellaSettlementSettingRequest::setCustomerID()
     * @uses DeleteUmbrellaSettlementSettingRequest::setSettingID()
     * @param int $customerID
     * @param int $settingID
     */
    public function __construct(?int $customerID = null, ?int $settingID = null)
    {
        $this
            ->setCustomerID($customerID)
            ->setSettingID($settingID);
    }
    /**
     * Get CustomerID value
     * @return int|null
     */
    public function getCustomerID(): ?int
    {
        return $this->CustomerID;
    }
    /**
     * Set CustomerID value
     * @param int $customerID
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteUmbrellaSettlementSettingRequest
     */
    public function setCustomerID(?int $customerID = null): self
    {
        // validation for constraint: int
        if (!is_null($customerID) && !(is_int($customerID) || ctype_digit($customerID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerID, true), gettype($customerID)), __LINE__);
        }
        $this->CustomerID = $customerID;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteUmbrellaSettlementSettingRequest
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
}
