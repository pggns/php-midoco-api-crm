<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBexioCurrenciesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBexioCurrenciesResponse extends AbstractStructBase
{
    /**
     * The MidocoBexioCurrency
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Crm\StructType\BexioCurrencyDTO[]
     */
    protected ?array $MidocoBexioCurrency = null;
    /**
     * Constructor method for GetBexioCurrenciesResponse
     * @uses GetBexioCurrenciesResponse::setMidocoBexioCurrency()
     * @param \Pggns\MidocoApi\Crm\StructType\BexioCurrencyDTO[] $midocoBexioCurrency
     */
    public function __construct(?array $midocoBexioCurrency = null)
    {
        $this
            ->setMidocoBexioCurrency($midocoBexioCurrency);
    }
    /**
     * Get MidocoBexioCurrency value
     * @return \Pggns\MidocoApi\Crm\StructType\BexioCurrencyDTO[]
     */
    public function getMidocoBexioCurrency(): ?array
    {
        return $this->MidocoBexioCurrency;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBexioCurrency method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBexioCurrency method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBexioCurrencyForArrayConstraintFromSetMidocoBexioCurrency(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBexioCurrenciesResponseMidocoBexioCurrencyItem) {
            // validation for constraint: itemType
            if (!$getBexioCurrenciesResponseMidocoBexioCurrencyItem instanceof \Pggns\MidocoApi\Crm\StructType\BexioCurrencyDTO) {
                $invalidValues[] = is_object($getBexioCurrenciesResponseMidocoBexioCurrencyItem) ? get_class($getBexioCurrenciesResponseMidocoBexioCurrencyItem) : sprintf('%s(%s)', gettype($getBexioCurrenciesResponseMidocoBexioCurrencyItem), var_export($getBexioCurrenciesResponseMidocoBexioCurrencyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBexioCurrency property can only contain items of type \Pggns\MidocoApi\Crm\StructType\BexioCurrencyDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBexioCurrency value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\BexioCurrencyDTO[] $midocoBexioCurrency
     * @return \Pggns\MidocoApi\Crm\StructType\GetBexioCurrenciesResponse
     */
    public function setMidocoBexioCurrency(?array $midocoBexioCurrency = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBexioCurrencyArrayErrorMessage = self::validateMidocoBexioCurrencyForArrayConstraintFromSetMidocoBexioCurrency($midocoBexioCurrency))) {
            throw new InvalidArgumentException($midocoBexioCurrencyArrayErrorMessage, __LINE__);
        }
        $this->MidocoBexioCurrency = $midocoBexioCurrency;
        
        return $this;
    }
    /**
     * Add item to MidocoBexioCurrency value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\BexioCurrencyDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetBexioCurrenciesResponse
     */
    public function addToMidocoBexioCurrency(\Pggns\MidocoApi\Crm\StructType\BexioCurrencyDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\BexioCurrencyDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoBexioCurrency property can only contain items of type \Pggns\MidocoApi\Crm\StructType\BexioCurrencyDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBexioCurrency[] = $item;
        
        return $this;
    }
}
