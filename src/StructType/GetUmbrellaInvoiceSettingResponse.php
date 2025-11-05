<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUmbrellaInvoiceSettingResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUmbrellaInvoiceSettingResponse extends AbstractStructBase
{
    /**
     * The CustomerID
     * Meta information extracted from the WSDL
     * - documentation: Echos the CustomerID of the request, so the CustomerID is included even if there are no settings.
     * @var int|null
     */
    protected ?int $CustomerID = null;
    /**
     * The MidocoUmbrellaInvoiceSetting
     * Meta information extracted from the WSDL
     * - ref: MidocoUmbrellaInvoiceSetting
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaInvoiceSetting|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaInvoiceSetting $MidocoUmbrellaInvoiceSetting = null;
    /**
     * Constructor method for GetUmbrellaInvoiceSettingResponse
     * @uses GetUmbrellaInvoiceSettingResponse::setCustomerID()
     * @uses GetUmbrellaInvoiceSettingResponse::setMidocoUmbrellaInvoiceSetting()
     * @param int $customerID
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaInvoiceSetting $midocoUmbrellaInvoiceSetting
     */
    public function __construct(?int $customerID = null, ?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaInvoiceSetting $midocoUmbrellaInvoiceSetting = null)
    {
        $this
            ->setCustomerID($customerID)
            ->setMidocoUmbrellaInvoiceSetting($midocoUmbrellaInvoiceSetting);
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
     * @return \Pggns\MidocoApi\Crm\StructType\GetUmbrellaInvoiceSettingResponse
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
     * Get MidocoUmbrellaInvoiceSetting value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaInvoiceSetting|null
     */
    public function getMidocoUmbrellaInvoiceSetting(): ?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaInvoiceSetting
    {
        return $this->MidocoUmbrellaInvoiceSetting;
    }
    /**
     * Set MidocoUmbrellaInvoiceSetting value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaInvoiceSetting $midocoUmbrellaInvoiceSetting
     * @return \Pggns\MidocoApi\Crm\StructType\GetUmbrellaInvoiceSettingResponse
     */
    public function setMidocoUmbrellaInvoiceSetting(?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaInvoiceSetting $midocoUmbrellaInvoiceSetting = null): self
    {
        $this->MidocoUmbrellaInvoiceSetting = $midocoUmbrellaInvoiceSetting;
        
        return $this;
    }
}
