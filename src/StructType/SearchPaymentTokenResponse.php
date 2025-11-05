<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchPaymentTokenResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchPaymentTokenResponse extends AbstractStructBase
{
    /**
     * The MidocoPaymentToken
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoPaymentToken
     * @var \Pggns\MidocoApi\Crm\StructType\PaymentTokenDTO[]
     */
    protected ?array $MidocoPaymentToken = null;
    /**
     * Constructor method for SearchPaymentTokenResponse
     * @uses SearchPaymentTokenResponse::setMidocoPaymentToken()
     * @param \Pggns\MidocoApi\Crm\StructType\PaymentTokenDTO[] $midocoPaymentToken
     */
    public function __construct(?array $midocoPaymentToken = null)
    {
        $this
            ->setMidocoPaymentToken($midocoPaymentToken);
    }
    /**
     * Get MidocoPaymentToken value
     * @return \Pggns\MidocoApi\Crm\StructType\PaymentTokenDTO[]
     */
    public function getMidocoPaymentToken(): ?array
    {
        return $this->MidocoPaymentToken;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoPaymentToken method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPaymentToken method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPaymentTokenForArrayConstraintFromSetMidocoPaymentToken(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchPaymentTokenResponseMidocoPaymentTokenItem) {
            // validation for constraint: itemType
            if (!$searchPaymentTokenResponseMidocoPaymentTokenItem instanceof \Pggns\MidocoApi\Crm\StructType\PaymentTokenDTO) {
                $invalidValues[] = is_object($searchPaymentTokenResponseMidocoPaymentTokenItem) ? get_class($searchPaymentTokenResponseMidocoPaymentTokenItem) : sprintf('%s(%s)', gettype($searchPaymentTokenResponseMidocoPaymentTokenItem), var_export($searchPaymentTokenResponseMidocoPaymentTokenItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPaymentToken property can only contain items of type \Pggns\MidocoApi\Crm\StructType\PaymentTokenDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPaymentToken value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\PaymentTokenDTO[] $midocoPaymentToken
     * @return \Pggns\MidocoApi\Crm\StructType\SearchPaymentTokenResponse
     */
    public function setMidocoPaymentToken(?array $midocoPaymentToken = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPaymentTokenArrayErrorMessage = self::validateMidocoPaymentTokenForArrayConstraintFromSetMidocoPaymentToken($midocoPaymentToken))) {
            throw new InvalidArgumentException($midocoPaymentTokenArrayErrorMessage, __LINE__);
        }
        $this->MidocoPaymentToken = $midocoPaymentToken;
        
        return $this;
    }
    /**
     * Add item to MidocoPaymentToken value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\PaymentTokenDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\SearchPaymentTokenResponse
     */
    public function addToMidocoPaymentToken(\Pggns\MidocoApi\Crm\StructType\PaymentTokenDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\PaymentTokenDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoPaymentToken property can only contain items of type \Pggns\MidocoApi\Crm\StructType\PaymentTokenDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPaymentToken[] = $item;
        
        return $this;
    }
}
