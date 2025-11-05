<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCountryStateListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCountryStateListResponse extends AbstractStructBase
{
    /**
     * The MidocoCity
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCity
     * @var \Pggns\MidocoApi\Crm\StructType\CityDTO[]
     */
    protected ?array $MidocoCity = null;
    /**
     * Constructor method for GetCountryStateListResponse
     * @uses GetCountryStateListResponse::setMidocoCity()
     * @param \Pggns\MidocoApi\Crm\StructType\CityDTO[] $midocoCity
     */
    public function __construct(?array $midocoCity = null)
    {
        $this
            ->setMidocoCity($midocoCity);
    }
    /**
     * Get MidocoCity value
     * @return \Pggns\MidocoApi\Crm\StructType\CityDTO[]
     */
    public function getMidocoCity(): ?array
    {
        return $this->MidocoCity;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCity method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCity method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCityForArrayConstraintFromSetMidocoCity(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCountryStateListResponseMidocoCityItem) {
            // validation for constraint: itemType
            if (!$getCountryStateListResponseMidocoCityItem instanceof \Pggns\MidocoApi\Crm\StructType\CityDTO) {
                $invalidValues[] = is_object($getCountryStateListResponseMidocoCityItem) ? get_class($getCountryStateListResponseMidocoCityItem) : sprintf('%s(%s)', gettype($getCountryStateListResponseMidocoCityItem), var_export($getCountryStateListResponseMidocoCityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCity property can only contain items of type \Pggns\MidocoApi\Crm\StructType\CityDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCity value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\CityDTO[] $midocoCity
     * @return \Pggns\MidocoApi\Crm\StructType\GetCountryStateListResponse
     */
    public function setMidocoCity(?array $midocoCity = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCityArrayErrorMessage = self::validateMidocoCityForArrayConstraintFromSetMidocoCity($midocoCity))) {
            throw new InvalidArgumentException($midocoCityArrayErrorMessage, __LINE__);
        }
        $this->MidocoCity = $midocoCity;
        
        return $this;
    }
    /**
     * Add item to MidocoCity value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\CityDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetCountryStateListResponse
     */
    public function addToMidocoCity(\Pggns\MidocoApi\Crm\StructType\CityDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\CityDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCity property can only contain items of type \Pggns\MidocoApi\Crm\StructType\CityDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCity[] = $item;
        
        return $this;
    }
}
