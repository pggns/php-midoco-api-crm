<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCrmSubjectAssignRequest StructType
 * @subpackage Structs
 */
class SaveCrmSubjectAssignRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmSubjectAssign
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmSubjectAssign
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmSubjectAssign[]
     */
    protected array $MidocoCrmSubjectAssign = [];
    /**
     * Constructor method for SaveCrmSubjectAssignRequest
     * @uses SaveCrmSubjectAssignRequest::setMidocoCrmSubjectAssign()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmSubjectAssign[] $midocoCrmSubjectAssign
     */
    public function __construct(array $midocoCrmSubjectAssign = [])
    {
        $this
            ->setMidocoCrmSubjectAssign($midocoCrmSubjectAssign);
    }
    /**
     * Get MidocoCrmSubjectAssign value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmSubjectAssign[]
     */
    public function getMidocoCrmSubjectAssign(): array
    {
        return $this->MidocoCrmSubjectAssign;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmSubjectAssign method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmSubjectAssign method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmSubjectAssignForArrayConstraintsFromSetMidocoCrmSubjectAssign(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveCrmSubjectAssignRequestMidocoCrmSubjectAssignItem) {
            // validation for constraint: itemType
            if (!$saveCrmSubjectAssignRequestMidocoCrmSubjectAssignItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmSubjectAssign) {
                $invalidValues[] = is_object($saveCrmSubjectAssignRequestMidocoCrmSubjectAssignItem) ? get_class($saveCrmSubjectAssignRequestMidocoCrmSubjectAssignItem) : sprintf('%s(%s)', gettype($saveCrmSubjectAssignRequestMidocoCrmSubjectAssignItem), var_export($saveCrmSubjectAssignRequestMidocoCrmSubjectAssignItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmSubjectAssign property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmSubjectAssign, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmSubjectAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmSubjectAssign[] $midocoCrmSubjectAssign
     * @return \Pggns\MidocoApi\Crm\StructType\SaveCrmSubjectAssignRequest
     */
    public function setMidocoCrmSubjectAssign(array $midocoCrmSubjectAssign = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmSubjectAssignArrayErrorMessage = self::validateMidocoCrmSubjectAssignForArrayConstraintsFromSetMidocoCrmSubjectAssign($midocoCrmSubjectAssign))) {
            throw new InvalidArgumentException($midocoCrmSubjectAssignArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmSubjectAssign = $midocoCrmSubjectAssign;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmSubjectAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmSubjectAssign $item
     * @return \Pggns\MidocoApi\Crm\StructType\SaveCrmSubjectAssignRequest
     */
    public function addToMidocoCrmSubjectAssign(\Pggns\MidocoApi\Crm\StructType\MidocoCrmSubjectAssign $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmSubjectAssign) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmSubjectAssign property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmSubjectAssign, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmSubjectAssign[] = $item;
        
        return $this;
    }
}
