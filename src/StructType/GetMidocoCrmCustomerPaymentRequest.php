<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoCrmCustomerPaymentRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Only the customerId is used. | If the request does not contain a MidocoCrmCustomer, the MidocoCrmCustomer does not have a customerId, or the customerId is 0; a fault is returned.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoCrmCustomerPaymentRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmCustomer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCrmCustomer
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $MidocoCrmCustomer = null;
    /**
     * The checkDebitCards
     * @var bool|null
     */
    protected ?bool $checkDebitCards = null;
    /**
     * Constructor method for GetMidocoCrmCustomerPaymentRequest
     * @uses GetMidocoCrmCustomerPaymentRequest::setMidocoCrmCustomer()
     * @uses GetMidocoCrmCustomerPaymentRequest::setCheckDebitCards()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer
     * @param bool $checkDebitCards
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer = null, ?bool $checkDebitCards = null)
    {
        $this
            ->setMidocoCrmCustomer($midocoCrmCustomer)
            ->setCheckDebitCards($checkDebitCards);
    }
    /**
     * Get MidocoCrmCustomer value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer|null
     */
    public function getMidocoCrmCustomer(): ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer
    {
        return $this->MidocoCrmCustomer;
    }
    /**
     * Set MidocoCrmCustomer value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer
     * @return \Pggns\MidocoApi\Crm\StructType\GetMidocoCrmCustomerPaymentRequest
     */
    public function setMidocoCrmCustomer(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer = null): self
    {
        $this->MidocoCrmCustomer = $midocoCrmCustomer;
        
        return $this;
    }
    /**
     * Get checkDebitCards value
     * @return bool|null
     */
    public function getCheckDebitCards(): ?bool
    {
        return $this->checkDebitCards;
    }
    /**
     * Set checkDebitCards value
     * @param bool $checkDebitCards
     * @return \Pggns\MidocoApi\Crm\StructType\GetMidocoCrmCustomerPaymentRequest
     */
    public function setCheckDebitCards(?bool $checkDebitCards = null): self
    {
        // validation for constraint: boolean
        if (!is_null($checkDebitCards) && !is_bool($checkDebitCards)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($checkDebitCards, true), gettype($checkDebitCards)), __LINE__);
        }
        $this->checkDebitCards = $checkDebitCards;
        
        return $this;
    }
}
