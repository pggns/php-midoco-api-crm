<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUmbrellaSettlementMonthsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUmbrellaSettlementMonthsResponse extends AbstractStructBase
{
    /**
     * The MidocoUmbrellaSettlementMonth
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoUmbrellaSettlementMonth
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementMonth[]
     */
    protected ?array $MidocoUmbrellaSettlementMonth = null;
    /**
     * The from
     * @var string|null
     */
    protected ?string $from = null;
    /**
     * The to
     * @var string|null
     */
    protected ?string $to = null;
    /**
     * Constructor method for GetUmbrellaSettlementMonthsResponse
     * @uses GetUmbrellaSettlementMonthsResponse::setMidocoUmbrellaSettlementMonth()
     * @uses GetUmbrellaSettlementMonthsResponse::setFrom()
     * @uses GetUmbrellaSettlementMonthsResponse::setTo()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementMonth[] $midocoUmbrellaSettlementMonth
     * @param string $from
     * @param string $to
     */
    public function __construct(?array $midocoUmbrellaSettlementMonth = null, ?string $from = null, ?string $to = null)
    {
        $this
            ->setMidocoUmbrellaSettlementMonth($midocoUmbrellaSettlementMonth)
            ->setFrom($from)
            ->setTo($to);
    }
    /**
     * Get MidocoUmbrellaSettlementMonth value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementMonth[]
     */
    public function getMidocoUmbrellaSettlementMonth(): ?array
    {
        return $this->MidocoUmbrellaSettlementMonth;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoUmbrellaSettlementMonth method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoUmbrellaSettlementMonth method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoUmbrellaSettlementMonthForArrayConstraintFromSetMidocoUmbrellaSettlementMonth(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUmbrellaSettlementMonthsResponseMidocoUmbrellaSettlementMonthItem) {
            // validation for constraint: itemType
            if (!$getUmbrellaSettlementMonthsResponseMidocoUmbrellaSettlementMonthItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementMonth) {
                $invalidValues[] = is_object($getUmbrellaSettlementMonthsResponseMidocoUmbrellaSettlementMonthItem) ? get_class($getUmbrellaSettlementMonthsResponseMidocoUmbrellaSettlementMonthItem) : sprintf('%s(%s)', gettype($getUmbrellaSettlementMonthsResponseMidocoUmbrellaSettlementMonthItem), var_export($getUmbrellaSettlementMonthsResponseMidocoUmbrellaSettlementMonthItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoUmbrellaSettlementMonth property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementMonth, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoUmbrellaSettlementMonth value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementMonth[] $midocoUmbrellaSettlementMonth
     * @return \Pggns\MidocoApi\Crm\StructType\GetUmbrellaSettlementMonthsResponse
     */
    public function setMidocoUmbrellaSettlementMonth(?array $midocoUmbrellaSettlementMonth = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoUmbrellaSettlementMonthArrayErrorMessage = self::validateMidocoUmbrellaSettlementMonthForArrayConstraintFromSetMidocoUmbrellaSettlementMonth($midocoUmbrellaSettlementMonth))) {
            throw new InvalidArgumentException($midocoUmbrellaSettlementMonthArrayErrorMessage, __LINE__);
        }
        $this->MidocoUmbrellaSettlementMonth = $midocoUmbrellaSettlementMonth;
        
        return $this;
    }
    /**
     * Add item to MidocoUmbrellaSettlementMonth value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementMonth $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetUmbrellaSettlementMonthsResponse
     */
    public function addToMidocoUmbrellaSettlementMonth(\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementMonth $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementMonth) {
            throw new InvalidArgumentException(sprintf('The MidocoUmbrellaSettlementMonth property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementMonth, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoUmbrellaSettlementMonth[] = $item;
        
        return $this;
    }
    /**
     * Get from value
     * @return string|null
     */
    public function getFrom(): ?string
    {
        return $this->from;
    }
    /**
     * Set from value
     * @param string $from
     * @return \Pggns\MidocoApi\Crm\StructType\GetUmbrellaSettlementMonthsResponse
     */
    public function setFrom(?string $from = null): self
    {
        // validation for constraint: string
        if (!is_null($from) && !is_string($from)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($from, true), gettype($from)), __LINE__);
        }
        $this->from = $from;
        
        return $this;
    }
    /**
     * Get to value
     * @return string|null
     */
    public function getTo(): ?string
    {
        return $this->to;
    }
    /**
     * Set to value
     * @param string $to
     * @return \Pggns\MidocoApi\Crm\StructType\GetUmbrellaSettlementMonthsResponse
     */
    public function setTo(?string $to = null): self
    {
        // validation for constraint: string
        if (!is_null($to) && !is_string($to)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($to, true), gettype($to)), __LINE__);
        }
        $this->to = $to;
        
        return $this;
    }
}
