<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPaymentTokenResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPaymentTokenResponse extends AbstractStructBase
{
    /**
     * The MidocoPaymentToken
     * Meta information extracted from the WSDL
     * - ref: MidocoPaymentToken
     * @var \Pggns\MidocoApi\Crm\StructType\PaymentTokenDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\PaymentTokenDTO $MidocoPaymentToken = null;
    /**
     * The MidocoPaymentTokenAttrib
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoPaymentTokenAttrib
     * @var \Pggns\MidocoApi\Crm\StructType\PaymentTokenAttribDTO[]
     */
    protected ?array $MidocoPaymentTokenAttrib = null;
    /**
     * Constructor method for GetPaymentTokenResponse
     * @uses GetPaymentTokenResponse::setMidocoPaymentToken()
     * @uses GetPaymentTokenResponse::setMidocoPaymentTokenAttrib()
     * @param \Pggns\MidocoApi\Crm\StructType\PaymentTokenDTO $midocoPaymentToken
     * @param \Pggns\MidocoApi\Crm\StructType\PaymentTokenAttribDTO[] $midocoPaymentTokenAttrib
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\PaymentTokenDTO $midocoPaymentToken = null, ?array $midocoPaymentTokenAttrib = null)
    {
        $this
            ->setMidocoPaymentToken($midocoPaymentToken)
            ->setMidocoPaymentTokenAttrib($midocoPaymentTokenAttrib);
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
     * @return \Pggns\MidocoApi\Crm\StructType\GetPaymentTokenResponse
     */
    public function setMidocoPaymentToken(?\Pggns\MidocoApi\Crm\StructType\PaymentTokenDTO $midocoPaymentToken = null): self
    {
        $this->MidocoPaymentToken = $midocoPaymentToken;
        
        return $this;
    }
    /**
     * Get MidocoPaymentTokenAttrib value
     * @return \Pggns\MidocoApi\Crm\StructType\PaymentTokenAttribDTO[]
     */
    public function getMidocoPaymentTokenAttrib(): ?array
    {
        return $this->MidocoPaymentTokenAttrib;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoPaymentTokenAttrib method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPaymentTokenAttrib method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPaymentTokenAttribForArrayConstraintFromSetMidocoPaymentTokenAttrib(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPaymentTokenResponseMidocoPaymentTokenAttribItem) {
            // validation for constraint: itemType
            if (!$getPaymentTokenResponseMidocoPaymentTokenAttribItem instanceof \Pggns\MidocoApi\Crm\StructType\PaymentTokenAttribDTO) {
                $invalidValues[] = is_object($getPaymentTokenResponseMidocoPaymentTokenAttribItem) ? get_class($getPaymentTokenResponseMidocoPaymentTokenAttribItem) : sprintf('%s(%s)', gettype($getPaymentTokenResponseMidocoPaymentTokenAttribItem), var_export($getPaymentTokenResponseMidocoPaymentTokenAttribItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPaymentTokenAttrib property can only contain items of type \Pggns\MidocoApi\Crm\StructType\PaymentTokenAttribDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPaymentTokenAttrib value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\PaymentTokenAttribDTO[] $midocoPaymentTokenAttrib
     * @return \Pggns\MidocoApi\Crm\StructType\GetPaymentTokenResponse
     */
    public function setMidocoPaymentTokenAttrib(?array $midocoPaymentTokenAttrib = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPaymentTokenAttribArrayErrorMessage = self::validateMidocoPaymentTokenAttribForArrayConstraintFromSetMidocoPaymentTokenAttrib($midocoPaymentTokenAttrib))) {
            throw new InvalidArgumentException($midocoPaymentTokenAttribArrayErrorMessage, __LINE__);
        }
        $this->MidocoPaymentTokenAttrib = $midocoPaymentTokenAttrib;
        
        return $this;
    }
    /**
     * Add item to MidocoPaymentTokenAttrib value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\PaymentTokenAttribDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetPaymentTokenResponse
     */
    public function addToMidocoPaymentTokenAttrib(\Pggns\MidocoApi\Crm\StructType\PaymentTokenAttribDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\PaymentTokenAttribDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoPaymentTokenAttrib property can only contain items of type \Pggns\MidocoApi\Crm\StructType\PaymentTokenAttribDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPaymentTokenAttrib[] = $item;
        
        return $this;
    }
}
