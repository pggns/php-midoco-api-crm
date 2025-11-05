<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveUmbrellaInvoiceSettingRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveUmbrellaInvoiceSettingRequest extends AbstractStructBase
{
    /**
     * The MidocoUmbrellaInvoiceSetting
     * Meta information extracted from the WSDL
     * - ref: MidocoUmbrellaInvoiceSetting
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaInvoiceSetting|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaInvoiceSetting $MidocoUmbrellaInvoiceSetting = null;
    /**
     * Constructor method for SaveUmbrellaInvoiceSettingRequest
     * @uses SaveUmbrellaInvoiceSettingRequest::setMidocoUmbrellaInvoiceSetting()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaInvoiceSetting $midocoUmbrellaInvoiceSetting
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaInvoiceSetting $midocoUmbrellaInvoiceSetting = null)
    {
        $this
            ->setMidocoUmbrellaInvoiceSetting($midocoUmbrellaInvoiceSetting);
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
     * @return \Pggns\MidocoApi\Crm\StructType\SaveUmbrellaInvoiceSettingRequest
     */
    public function setMidocoUmbrellaInvoiceSetting(?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaInvoiceSetting $midocoUmbrellaInvoiceSetting = null): self
    {
        $this->MidocoUmbrellaInvoiceSetting = $midocoUmbrellaInvoiceSetting;
        
        return $this;
    }
}
