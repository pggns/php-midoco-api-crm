<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GeneratePaymentTokenResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GeneratePaymentTokenResponse extends AbstractStructBase
{
    /**
     * The MidocoPaymentToken
     * Meta information extracted from the WSDL
     * - ref: MidocoPaymentToken
     * @var \Pggns\MidocoApi\Crm\StructType\PaymentTokenDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\PaymentTokenDTO $MidocoPaymentToken = null;
    /**
     * Constructor method for GeneratePaymentTokenResponse
     * @uses GeneratePaymentTokenResponse::setMidocoPaymentToken()
     * @param \Pggns\MidocoApi\Crm\StructType\PaymentTokenDTO $midocoPaymentToken
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\PaymentTokenDTO $midocoPaymentToken = null)
    {
        $this
            ->setMidocoPaymentToken($midocoPaymentToken);
    }
    /**
     * Get MidocoPaymentToken value
     * @return \Pggns\MidocoApi\Crm\StructType\PaymentTokenDTO|null
     */
    public function getMidocoPaymentToken(): ?\Pggns\MidocoApi\Crm\StructType\PaymentTokenDTO
    {
        return $this->MidocoPaymentToken;
    }
    /**
     * Set MidocoPaymentToken value
     * @param \Pggns\MidocoApi\Crm\StructType\PaymentTokenDTO $midocoPaymentToken
     * @return \Pggns\MidocoApi\Crm\StructType\GeneratePaymentTokenResponse
     */
    public function setMidocoPaymentToken(?\Pggns\MidocoApi\Crm\StructType\PaymentTokenDTO $midocoPaymentToken = null): self
    {
        $this->MidocoPaymentToken = $midocoPaymentToken;
        
        return $this;
    }
}
