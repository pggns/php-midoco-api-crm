<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoPaymentTokenAttribType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoPaymentTokenAttribType extends PaymentTokenAttribTypeDTO
{
    /**
     * The MidocoPaymentTokenAttribTypeDesc
     * Meta information extracted from the WSDL
     * - ref: MidocoPaymentTokenAttribTypeDesc
     * @var \Pggns\MidocoApi\Crm\StructType\PaymentTokenAttribDescriptionDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\PaymentTokenAttribDescriptionDTO $MidocoPaymentTokenAttribTypeDesc = null;
    /**
     * Constructor method for MidocoPaymentTokenAttribType
     * @uses MidocoPaymentTokenAttribType::setMidocoPaymentTokenAttribTypeDesc()
     * @param \Pggns\MidocoApi\Crm\StructType\PaymentTokenAttribDescriptionDTO $midocoPaymentTokenAttribTypeDesc
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\PaymentTokenAttribDescriptionDTO $midocoPaymentTokenAttribTypeDesc = null)
    {
        $this
            ->setMidocoPaymentTokenAttribTypeDesc($midocoPaymentTokenAttribTypeDesc);
    }
    /**
     * Get MidocoPaymentTokenAttribTypeDesc value
     * @return \Pggns\MidocoApi\Crm\StructType\PaymentTokenAttribDescriptionDTO|null
     */
    public function getMidocoPaymentTokenAttribTypeDesc(): ?\Pggns\MidocoApi\Crm\StructType\PaymentTokenAttribDescriptionDTO
    {
        return $this->MidocoPaymentTokenAttribTypeDesc;
    }
    /**
     * Set MidocoPaymentTokenAttribTypeDesc value
     * @param \Pggns\MidocoApi\Crm\StructType\PaymentTokenAttribDescriptionDTO $midocoPaymentTokenAttribTypeDesc
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoPaymentTokenAttribType
     */
    public function setMidocoPaymentTokenAttribTypeDesc(?\Pggns\MidocoApi\Crm\StructType\PaymentTokenAttribDescriptionDTO $midocoPaymentTokenAttribTypeDesc = null): self
    {
        $this->MidocoPaymentTokenAttribTypeDesc = $midocoPaymentTokenAttribTypeDesc;
        
        return $this;
    }
}
