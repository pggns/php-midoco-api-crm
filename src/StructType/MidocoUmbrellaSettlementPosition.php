<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoUmbrellaSettlementPosition StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoUmbrellaSettlementPosition extends UmbrellaSettlementPositionDTO
{
    /**
     * The MidocoUmbrellaSettlementPosition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoUmbrellaSettlementPosition
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementPosition[]
     */
    protected ?array $MidocoUmbrellaSettlementPosition = null;
    /**
     * The isBaseFee
     * @var bool|null
     */
    protected ?bool $isBaseFee = null;
    /**
     * The monetaryAmount
     * Meta information extracted from the WSDL
     * - documentation: The monetary amount of the position, including its sub-positions.<br> This value is not saved.<br> It is intended to make it simpler to calculate the sum.
     * @var float|null
     */
    protected ?float $monetaryAmount = null;
    /**
     * Constructor method for MidocoUmbrellaSettlementPosition
     * @uses MidocoUmbrellaSettlementPosition::setMidocoUmbrellaSettlementPosition()
     * @uses MidocoUmbrellaSettlementPosition::setIsBaseFee()
     * @uses MidocoUmbrellaSettlementPosition::setMonetaryAmount()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementPosition[] $midocoUmbrellaSettlementPosition
     * @param bool $isBaseFee
     * @param float $monetaryAmount
     */
    public function __construct(?array $midocoUmbrellaSettlementPosition = null, ?bool $isBaseFee = null, ?float $monetaryAmount = null)
    {
        $this
            ->setMidocoUmbrellaSettlementPosition($midocoUmbrellaSettlementPosition)
            ->setIsBaseFee($isBaseFee)
            ->setMonetaryAmount($monetaryAmount);
    }
    /**
     * Get MidocoUmbrellaSettlementPosition value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementPosition[]
     */
    public function getMidocoUmbrellaSettlementPosition(): ?array
    {
        return $this->MidocoUmbrellaSettlementPosition;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoUmbrellaSettlementPosition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoUmbrellaSettlementPosition method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoUmbrellaSettlementPositionForArrayConstraintFromSetMidocoUmbrellaSettlementPosition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoUmbrellaSettlementPositionMidocoUmbrellaSettlementPositionItem) {
            // validation for constraint: itemType
            if (!$midocoUmbrellaSettlementPositionMidocoUmbrellaSettlementPositionItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementPosition) {
                $invalidValues[] = is_object($midocoUmbrellaSettlementPositionMidocoUmbrellaSettlementPositionItem) ? get_class($midocoUmbrellaSettlementPositionMidocoUmbrellaSettlementPositionItem) : sprintf('%s(%s)', gettype($midocoUmbrellaSettlementPositionMidocoUmbrellaSettlementPositionItem), var_export($midocoUmbrellaSettlementPositionMidocoUmbrellaSettlementPositionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoUmbrellaSettlementPosition property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementPosition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoUmbrellaSettlementPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementPosition[] $midocoUmbrellaSettlementPosition
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementPosition
     */
    public function setMidocoUmbrellaSettlementPosition(?array $midocoUmbrellaSettlementPosition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoUmbrellaSettlementPositionArrayErrorMessage = self::validateMidocoUmbrellaSettlementPositionForArrayConstraintFromSetMidocoUmbrellaSettlementPosition($midocoUmbrellaSettlementPosition))) {
            throw new InvalidArgumentException($midocoUmbrellaSettlementPositionArrayErrorMessage, __LINE__);
        }
        $this->MidocoUmbrellaSettlementPosition = $midocoUmbrellaSettlementPosition;
        
        return $this;
    }
    /**
     * Add item to MidocoUmbrellaSettlementPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementPosition $item
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementPosition
     */
    public function addToMidocoUmbrellaSettlementPosition(\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementPosition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementPosition) {
            throw new InvalidArgumentException(sprintf('The MidocoUmbrellaSettlementPosition property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementPosition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoUmbrellaSettlementPosition[] = $item;
        
        return $this;
    }
    /**
     * Get isBaseFee value
     * @return bool|null
     */
    public function getIsBaseFee(): ?bool
    {
        return $this->isBaseFee;
    }
    /**
     * Set isBaseFee value
     * @param bool $isBaseFee
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementPosition
     */
    public function setIsBaseFee(?bool $isBaseFee = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isBaseFee) && !is_bool($isBaseFee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isBaseFee, true), gettype($isBaseFee)), __LINE__);
        }
        $this->isBaseFee = $isBaseFee;
        
        return $this;
    }
    /**
     * Get monetaryAmount value
     * @return float|null
     */
    public function getMonetaryAmount(): ?float
    {
        return $this->monetaryAmount;
    }
    /**
     * Set monetaryAmount value
     * @param float $monetaryAmount
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementPosition
     */
    public function setMonetaryAmount(?float $monetaryAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($monetaryAmount) && !(is_float($monetaryAmount) || is_numeric($monetaryAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($monetaryAmount, true), gettype($monetaryAmount)), __LINE__);
        }
        $this->monetaryAmount = $monetaryAmount;
        
        return $this;
    }
}
