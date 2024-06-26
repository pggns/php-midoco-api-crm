<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCustomerMfResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: saveCustomerMf --- saves a mf (or more) for a customer
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveCustomerMfResponse extends AbstractStructBase
{
    /**
     * The MidocoCustomerMf
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoCustomerMf
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCustomerMf[]
     */
    protected ?array $MidocoCustomerMf = null;
    /**
     * Constructor method for SaveCustomerMfResponse
     * @uses SaveCustomerMfResponse::setMidocoCustomerMf()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCustomerMf[] $midocoCustomerMf
     */
    public function __construct(?array $midocoCustomerMf = null)
    {
        $this
            ->setMidocoCustomerMf($midocoCustomerMf);
    }
    /**
     * Get MidocoCustomerMf value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerMf[]
     */
    public function getMidocoCustomerMf(): ?array
    {
        return $this->MidocoCustomerMf;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCustomerMf method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerMf method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerMfForArrayConstraintFromSetMidocoCustomerMf(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveCustomerMfResponseMidocoCustomerMfItem) {
            // validation for constraint: itemType
            if (!$saveCustomerMfResponseMidocoCustomerMfItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCustomerMf) {
                $invalidValues[] = is_object($saveCustomerMfResponseMidocoCustomerMfItem) ? get_class($saveCustomerMfResponseMidocoCustomerMfItem) : sprintf('%s(%s)', gettype($saveCustomerMfResponseMidocoCustomerMfItem), var_export($saveCustomerMfResponseMidocoCustomerMfItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerMf property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCustomerMf, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerMf value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCustomerMf[] $midocoCustomerMf
     * @return \Pggns\MidocoApi\Crm\StructType\SaveCustomerMfResponse
     */
    public function setMidocoCustomerMf(?array $midocoCustomerMf = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerMfArrayErrorMessage = self::validateMidocoCustomerMfForArrayConstraintFromSetMidocoCustomerMf($midocoCustomerMf))) {
            throw new InvalidArgumentException($midocoCustomerMfArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerMf = $midocoCustomerMf;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerMf value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCustomerMf $item
     * @return \Pggns\MidocoApi\Crm\StructType\SaveCustomerMfResponse
     */
    public function addToMidocoCustomerMf(\Pggns\MidocoApi\Crm\StructType\MidocoCustomerMf $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCustomerMf) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerMf property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCustomerMf, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerMf[] = $item;
        
        return $this;
    }
}
