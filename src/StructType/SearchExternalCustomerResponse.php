<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchExternalCustomerResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchExternalCustomerResponse extends AbstractStructBase
{
    /**
     * The MidocoCustomerSearch
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCustomerSearch
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCustomerSearch[]
     */
    protected ?array $MidocoCustomerSearch = null;
    /**
     * Constructor method for SearchExternalCustomerResponse
     * @uses SearchExternalCustomerResponse::setMidocoCustomerSearch()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCustomerSearch[] $midocoCustomerSearch
     */
    public function __construct(?array $midocoCustomerSearch = null)
    {
        $this
            ->setMidocoCustomerSearch($midocoCustomerSearch);
    }
    /**
     * Get MidocoCustomerSearch value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerSearch[]
     */
    public function getMidocoCustomerSearch(): ?array
    {
        return $this->MidocoCustomerSearch;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCustomerSearch method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerSearch method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerSearchForArrayConstraintFromSetMidocoCustomerSearch(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchExternalCustomerResponseMidocoCustomerSearchItem) {
            // validation for constraint: itemType
            if (!$searchExternalCustomerResponseMidocoCustomerSearchItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCustomerSearch) {
                $invalidValues[] = is_object($searchExternalCustomerResponseMidocoCustomerSearchItem) ? get_class($searchExternalCustomerResponseMidocoCustomerSearchItem) : sprintf('%s(%s)', gettype($searchExternalCustomerResponseMidocoCustomerSearchItem), var_export($searchExternalCustomerResponseMidocoCustomerSearchItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerSearch property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCustomerSearch, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerSearch value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCustomerSearch[] $midocoCustomerSearch
     * @return \Pggns\MidocoApi\Crm\StructType\SearchExternalCustomerResponse
     */
    public function setMidocoCustomerSearch(?array $midocoCustomerSearch = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerSearchArrayErrorMessage = self::validateMidocoCustomerSearchForArrayConstraintFromSetMidocoCustomerSearch($midocoCustomerSearch))) {
            throw new InvalidArgumentException($midocoCustomerSearchArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerSearch = $midocoCustomerSearch;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerSearch value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCustomerSearch $item
     * @return \Pggns\MidocoApi\Crm\StructType\SearchExternalCustomerResponse
     */
    public function addToMidocoCustomerSearch(\Pggns\MidocoApi\Crm\StructType\MidocoCustomerSearch $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCustomerSearch) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerSearch property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCustomerSearch, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerSearch[] = $item;
        
        return $this;
    }
}
