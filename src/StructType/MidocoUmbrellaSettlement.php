<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoUmbrellaSettlement StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoUmbrellaSettlement extends UmbrellaSettlementDTO
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
     * The baseFeeAmount
     * @var float|null
     */
    protected ?float $baseFeeAmount = null;
    /**
     * The totalAmount
     * @var float|null
     */
    protected ?float $totalAmount = null;
    /**
     * Constructor method for MidocoUmbrellaSettlement
     * @uses MidocoUmbrellaSettlement::setMidocoUmbrellaSettlementPosition()
     * @uses MidocoUmbrellaSettlement::setBaseFeeAmount()
     * @uses MidocoUmbrellaSettlement::setTotalAmount()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementPosition[] $midocoUmbrellaSettlementPosition
     * @param float $baseFeeAmount
     * @param float $totalAmount
     */
    public function __construct(?array $midocoUmbrellaSettlementPosition = null, ?float $baseFeeAmount = null, ?float $totalAmount = null)
    {
        $this
            ->setMidocoUmbrellaSettlementPosition($midocoUmbrellaSettlementPosition)
            ->setBaseFeeAmount($baseFeeAmount)
            ->setTotalAmount($totalAmount);
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
        foreach ($values as $midocoUmbrellaSettlementMidocoUmbrellaSettlementPositionItem) {
            // validation for constraint: itemType
            if (!$midocoUmbrellaSettlementMidocoUmbrellaSettlementPositionItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementPosition) {
                $invalidValues[] = is_object($midocoUmbrellaSettlementMidocoUmbrellaSettlementPositionItem) ? get_class($midocoUmbrellaSettlementMidocoUmbrellaSettlementPositionItem) : sprintf('%s(%s)', gettype($midocoUmbrellaSettlementMidocoUmbrellaSettlementPositionItem), var_export($midocoUmbrellaSettlementMidocoUmbrellaSettlementPositionItem, true));
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlement
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlement
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
     * Get baseFeeAmount value
     * @return float|null
     */
    public function getBaseFeeAmount(): ?float
    {
        return $this->baseFeeAmount;
    }
    /**
     * Set baseFeeAmount value
     * @param float $baseFeeAmount
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlement
     */
    public function setBaseFeeAmount(?float $baseFeeAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($baseFeeAmount) && !(is_float($baseFeeAmount) || is_numeric($baseFeeAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($baseFeeAmount, true), gettype($baseFeeAmount)), __LINE__);
        }
        $this->baseFeeAmount = $baseFeeAmount;
        
        return $this;
    }
    /**
     * Get totalAmount value
     * @return float|null
     */
    public function getTotalAmount(): ?float
    {
        return $this->totalAmount;
    }
    /**
     * Set totalAmount value
     * @param float $totalAmount
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlement
     */
    public function setTotalAmount(?float $totalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalAmount) && !(is_float($totalAmount) || is_numeric($totalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalAmount, true), gettype($totalAmount)), __LINE__);
        }
        $this->totalAmount = $totalAmount;
        
        return $this;
    }
}
