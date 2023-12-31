<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCustomerUserAddressingRequest StructType
 * @subpackage Structs
 */
class DeleteCustomerUserAddressingRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmUserAddressing
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmUserAddressing
     * @var \Pggns\MidocoApi\Crm\StructType\CrmUserAddressingDTO[]
     */
    protected array $MidocoCrmUserAddressing = [];
    /**
     * Constructor method for DeleteCustomerUserAddressingRequest
     * @uses DeleteCustomerUserAddressingRequest::setMidocoCrmUserAddressing()
     * @param \Pggns\MidocoApi\Crm\StructType\CrmUserAddressingDTO[] $midocoCrmUserAddressing
     */
    public function __construct(array $midocoCrmUserAddressing = [])
    {
        $this
            ->setMidocoCrmUserAddressing($midocoCrmUserAddressing);
    }
    /**
     * Get MidocoCrmUserAddressing value
     * @return \Pggns\MidocoApi\Crm\StructType\CrmUserAddressingDTO[]
     */
    public function getMidocoCrmUserAddressing(): array
    {
        return $this->MidocoCrmUserAddressing;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmUserAddressing method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmUserAddressing method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmUserAddressingForArrayConstraintsFromSetMidocoCrmUserAddressing(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $deleteCustomerUserAddressingRequestMidocoCrmUserAddressingItem) {
            // validation for constraint: itemType
            if (!$deleteCustomerUserAddressingRequestMidocoCrmUserAddressingItem instanceof \Pggns\MidocoApi\Crm\StructType\CrmUserAddressingDTO) {
                $invalidValues[] = is_object($deleteCustomerUserAddressingRequestMidocoCrmUserAddressingItem) ? get_class($deleteCustomerUserAddressingRequestMidocoCrmUserAddressingItem) : sprintf('%s(%s)', gettype($deleteCustomerUserAddressingRequestMidocoCrmUserAddressingItem), var_export($deleteCustomerUserAddressingRequestMidocoCrmUserAddressingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmUserAddressing property can only contain items of type \Pggns\MidocoApi\Crm\StructType\CrmUserAddressingDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmUserAddressing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\CrmUserAddressingDTO[] $midocoCrmUserAddressing
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteCustomerUserAddressingRequest
     */
    public function setMidocoCrmUserAddressing(array $midocoCrmUserAddressing = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmUserAddressingArrayErrorMessage = self::validateMidocoCrmUserAddressingForArrayConstraintsFromSetMidocoCrmUserAddressing($midocoCrmUserAddressing))) {
            throw new InvalidArgumentException($midocoCrmUserAddressingArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmUserAddressing = $midocoCrmUserAddressing;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmUserAddressing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\CrmUserAddressingDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteCustomerUserAddressingRequest
     */
    public function addToMidocoCrmUserAddressing(\Pggns\MidocoApi\Crm\StructType\CrmUserAddressingDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\CrmUserAddressingDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmUserAddressing property can only contain items of type \Pggns\MidocoApi\Crm\StructType\CrmUserAddressingDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmUserAddressing[] = $item;
        
        return $this;
    }
}
