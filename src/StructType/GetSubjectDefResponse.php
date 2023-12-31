<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSubjectDefResponse StructType
 * @subpackage Structs
 */
class GetSubjectDefResponse extends AbstractStructBase
{
    /**
     * The MidocoSubjectDef
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSubjectDef
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoSubjectDef[]
     */
    protected array $MidocoSubjectDef = [];
    /**
     * Constructor method for GetSubjectDefResponse
     * @uses GetSubjectDefResponse::setMidocoSubjectDef()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoSubjectDef[] $midocoSubjectDef
     */
    public function __construct(array $midocoSubjectDef = [])
    {
        $this
            ->setMidocoSubjectDef($midocoSubjectDef);
    }
    /**
     * Get MidocoSubjectDef value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoSubjectDef[]
     */
    public function getMidocoSubjectDef(): array
    {
        return $this->MidocoSubjectDef;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSubjectDef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSubjectDef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSubjectDefForArrayConstraintsFromSetMidocoSubjectDef(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSubjectDefResponseMidocoSubjectDefItem) {
            // validation for constraint: itemType
            if (!$getSubjectDefResponseMidocoSubjectDefItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoSubjectDef) {
                $invalidValues[] = is_object($getSubjectDefResponseMidocoSubjectDefItem) ? get_class($getSubjectDefResponseMidocoSubjectDefItem) : sprintf('%s(%s)', gettype($getSubjectDefResponseMidocoSubjectDefItem), var_export($getSubjectDefResponseMidocoSubjectDefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSubjectDef property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoSubjectDef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSubjectDef value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoSubjectDef[] $midocoSubjectDef
     * @return \Pggns\MidocoApi\Crm\StructType\GetSubjectDefResponse
     */
    public function setMidocoSubjectDef(array $midocoSubjectDef = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSubjectDefArrayErrorMessage = self::validateMidocoSubjectDefForArrayConstraintsFromSetMidocoSubjectDef($midocoSubjectDef))) {
            throw new InvalidArgumentException($midocoSubjectDefArrayErrorMessage, __LINE__);
        }
        $this->MidocoSubjectDef = $midocoSubjectDef;
        
        return $this;
    }
    /**
     * Add item to MidocoSubjectDef value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoSubjectDef $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetSubjectDefResponse
     */
    public function addToMidocoSubjectDef(\Pggns\MidocoApi\Crm\StructType\MidocoSubjectDef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoSubjectDef) {
            throw new InvalidArgumentException(sprintf('The MidocoSubjectDef property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoSubjectDef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSubjectDef[] = $item;
        
        return $this;
    }
}
