<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdatePaymentTokenRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdatePaymentTokenRequest extends AbstractStructBase
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
     * The ccNo
     * @var string|null
     */
    protected ?string $ccNo = null;
    /**
     * The cvc
     * @var string|null
     */
    protected ?string $cvc = null;
    /**
     * Constructor method for UpdatePaymentTokenRequest
     * @uses UpdatePaymentTokenRequest::setMidocoPaymentToken()
     * @uses UpdatePaymentTokenRequest::setMidocoPaymentTokenAttrib()
     * @uses UpdatePaymentTokenRequest::setCcNo()
     * @uses UpdatePaymentTokenRequest::setCvc()
     * @param \Pggns\MidocoApi\Crm\StructType\PaymentTokenDTO $midocoPaymentToken
     * @param \Pggns\MidocoApi\Crm\StructType\PaymentTokenAttribDTO[] $midocoPaymentTokenAttrib
     * @param string $ccNo
     * @param string $cvc
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\PaymentTokenDTO $midocoPaymentToken = null, ?array $midocoPaymentTokenAttrib = null, ?string $ccNo = null, ?string $cvc = null)
    {
        $this
            ->setMidocoPaymentToken($midocoPaymentToken)
            ->setMidocoPaymentTokenAttrib($midocoPaymentTokenAttrib)
            ->setCcNo($ccNo)
            ->setCvc($cvc);
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
     * @return \Pggns\MidocoApi\Crm\StructType\UpdatePaymentTokenRequest
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
        foreach ($values as $updatePaymentTokenRequestMidocoPaymentTokenAttribItem) {
            // validation for constraint: itemType
            if (!$updatePaymentTokenRequestMidocoPaymentTokenAttribItem instanceof \Pggns\MidocoApi\Crm\StructType\PaymentTokenAttribDTO) {
                $invalidValues[] = is_object($updatePaymentTokenRequestMidocoPaymentTokenAttribItem) ? get_class($updatePaymentTokenRequestMidocoPaymentTokenAttribItem) : sprintf('%s(%s)', gettype($updatePaymentTokenRequestMidocoPaymentTokenAttribItem), var_export($updatePaymentTokenRequestMidocoPaymentTokenAttribItem, true));
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
     * @return \Pggns\MidocoApi\Crm\StructType\UpdatePaymentTokenRequest
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
     * @return \Pggns\MidocoApi\Crm\StructType\UpdatePaymentTokenRequest
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
    /**
     * Get ccNo value
     * @return string|null
     */
    public function getCcNo(): ?string
    {
        return $this->ccNo;
    }
    /**
     * Set ccNo value
     * @param string $ccNo
     * @return \Pggns\MidocoApi\Crm\StructType\UpdatePaymentTokenRequest
     */
    public function setCcNo(?string $ccNo = null): self
    {
        // validation for constraint: string
        if (!is_null($ccNo) && !is_string($ccNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccNo, true), gettype($ccNo)), __LINE__);
        }
        $this->ccNo = $ccNo;
        
        return $this;
    }
    /**
     * Get cvc value
     * @return string|null
     */
    public function getCvc(): ?string
    {
        return $this->cvc;
    }
    /**
     * Set cvc value
     * @param string $cvc
     * @return \Pggns\MidocoApi\Crm\StructType\UpdatePaymentTokenRequest
     */
    public function setCvc(?string $cvc = null): self
    {
        // validation for constraint: string
        if (!is_null($cvc) && !is_string($cvc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cvc, true), gettype($cvc)), __LINE__);
        }
        $this->cvc = $cvc;
        
        return $this;
    }
}
