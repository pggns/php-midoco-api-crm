<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUmbrellaInvoiceSettingRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUmbrellaInvoiceSettingRequest extends AbstractStructBase
{
    /**
     * The CustomerID
     * @var int|null
     */
    protected ?int $CustomerID = null;
    /**
     * Constructor method for GetUmbrellaInvoiceSettingRequest
     * @uses GetUmbrellaInvoiceSettingRequest::setCustomerID()
     * @param int $customerID
     */
    public function __construct(?int $customerID = null)
    {
        $this
            ->setCustomerID($customerID);
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
     * @return \Pggns\MidocoApi\Crm\StructType\GetUmbrellaInvoiceSettingRequest
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
}
