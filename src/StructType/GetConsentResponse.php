<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetConsentResponse StructType
 * @subpackage Structs
 */
class GetConsentResponse extends AbstractStructBase
{
    /**
     * The MidocoConsent
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoConsent
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoConsent[]
     */
    protected array $MidocoConsent = [];
    /**
     * Constructor method for GetConsentResponse
     * @uses GetConsentResponse::setMidocoConsent()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoConsent[] $midocoConsent
     */
    public function __construct(array $midocoConsent = [])
    {
        $this
            ->setMidocoConsent($midocoConsent);
    }
    /**
     * Get MidocoConsent value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoConsent[]
     */
    public function getMidocoConsent(): array
    {
        return $this->MidocoConsent;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoConsent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoConsent method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoConsentForArrayConstraintsFromSetMidocoConsent(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getConsentResponseMidocoConsentItem) {
            // validation for constraint: itemType
            if (!$getConsentResponseMidocoConsentItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoConsent) {
                $invalidValues[] = is_object($getConsentResponseMidocoConsentItem) ? get_class($getConsentResponseMidocoConsentItem) : sprintf('%s(%s)', gettype($getConsentResponseMidocoConsentItem), var_export($getConsentResponseMidocoConsentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoConsent property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoConsent, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoConsent value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoConsent[] $midocoConsent
     * @return \Pggns\MidocoApi\Crm\StructType\GetConsentResponse
     */
    public function setMidocoConsent(array $midocoConsent = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoConsentArrayErrorMessage = self::validateMidocoConsentForArrayConstraintsFromSetMidocoConsent($midocoConsent))) {
            throw new InvalidArgumentException($midocoConsentArrayErrorMessage, __LINE__);
        }
        $this->MidocoConsent = $midocoConsent;
        
        return $this;
    }
    /**
     * Add item to MidocoConsent value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoConsent $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetConsentResponse
     */
    public function addToMidocoConsent(\Pggns\MidocoApi\Crm\StructType\MidocoConsent $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoConsent) {
            throw new InvalidArgumentException(sprintf('The MidocoConsent property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoConsent, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoConsent[] = $item;
        
        return $this;
    }
}
