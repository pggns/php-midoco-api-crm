<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadUmbrellaSettlementsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UploadUmbrellaSettlementsResponse extends AbstractStructBase
{
    /**
     * The SettlementMonthID
     * @var int|null
     */
    protected ?int $SettlementMonthID = null;
    /**
     * The UmbrellaSettlementDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: UmbrellaSettlementDate
     * @var \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementDate|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementDate $UmbrellaSettlementDate = null;
    /**
     * The UmbrellaSettlementMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: UmbrellaSettlementMessage
     * @var \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementMessage[]
     */
    protected ?array $UmbrellaSettlementMessage = null;
    /**
     * Constructor method for UploadUmbrellaSettlementsResponse
     * @uses UploadUmbrellaSettlementsResponse::setSettlementMonthID()
     * @uses UploadUmbrellaSettlementsResponse::setUmbrellaSettlementDate()
     * @uses UploadUmbrellaSettlementsResponse::setUmbrellaSettlementMessage()
     * @param int $settlementMonthID
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementDate $umbrellaSettlementDate
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementMessage[] $umbrellaSettlementMessage
     */
    public function __construct(?int $settlementMonthID = null, ?\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementDate $umbrellaSettlementDate = null, ?array $umbrellaSettlementMessage = null)
    {
        $this
            ->setSettlementMonthID($settlementMonthID)
            ->setUmbrellaSettlementDate($umbrellaSettlementDate)
            ->setUmbrellaSettlementMessage($umbrellaSettlementMessage);
    }
    /**
     * Get SettlementMonthID value
     * @return int|null
     */
    public function getSettlementMonthID(): ?int
    {
        return $this->SettlementMonthID;
    }
    /**
     * Set SettlementMonthID value
     * @param int $settlementMonthID
     * @return \Pggns\MidocoApi\Crm\StructType\UploadUmbrellaSettlementsResponse
     */
    public function setSettlementMonthID(?int $settlementMonthID = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementMonthID) && !(is_int($settlementMonthID) || ctype_digit($settlementMonthID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementMonthID, true), gettype($settlementMonthID)), __LINE__);
        }
        $this->SettlementMonthID = $settlementMonthID;
        
        return $this;
    }
    /**
     * Get UmbrellaSettlementDate value
     * @return \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementDate|null
     */
    public function getUmbrellaSettlementDate(): ?\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementDate
    {
        return $this->UmbrellaSettlementDate;
    }
    /**
     * Set UmbrellaSettlementDate value
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementDate $umbrellaSettlementDate
     * @return \Pggns\MidocoApi\Crm\StructType\UploadUmbrellaSettlementsResponse
     */
    public function setUmbrellaSettlementDate(?\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementDate $umbrellaSettlementDate = null): self
    {
        $this->UmbrellaSettlementDate = $umbrellaSettlementDate;
        
        return $this;
    }
    /**
     * Get UmbrellaSettlementMessage value
     * @return \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementMessage[]
     */
    public function getUmbrellaSettlementMessage(): ?array
    {
        return $this->UmbrellaSettlementMessage;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUmbrellaSettlementMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUmbrellaSettlementMessage method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUmbrellaSettlementMessageForArrayConstraintFromSetUmbrellaSettlementMessage(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $uploadUmbrellaSettlementsResponseUmbrellaSettlementMessageItem) {
            // validation for constraint: itemType
            if (!$uploadUmbrellaSettlementsResponseUmbrellaSettlementMessageItem instanceof \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementMessage) {
                $invalidValues[] = is_object($uploadUmbrellaSettlementsResponseUmbrellaSettlementMessageItem) ? get_class($uploadUmbrellaSettlementsResponseUmbrellaSettlementMessageItem) : sprintf('%s(%s)', gettype($uploadUmbrellaSettlementsResponseUmbrellaSettlementMessageItem), var_export($uploadUmbrellaSettlementsResponseUmbrellaSettlementMessageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UmbrellaSettlementMessage property can only contain items of type \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementMessage, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set UmbrellaSettlementMessage value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementMessage[] $umbrellaSettlementMessage
     * @return \Pggns\MidocoApi\Crm\StructType\UploadUmbrellaSettlementsResponse
     */
    public function setUmbrellaSettlementMessage(?array $umbrellaSettlementMessage = null): self
    {
        // validation for constraint: array
        if ('' !== ($umbrellaSettlementMessageArrayErrorMessage = self::validateUmbrellaSettlementMessageForArrayConstraintFromSetUmbrellaSettlementMessage($umbrellaSettlementMessage))) {
            throw new InvalidArgumentException($umbrellaSettlementMessageArrayErrorMessage, __LINE__);
        }
        $this->UmbrellaSettlementMessage = $umbrellaSettlementMessage;
        
        return $this;
    }
    /**
     * Add item to UmbrellaSettlementMessage value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementMessage $item
     * @return \Pggns\MidocoApi\Crm\StructType\UploadUmbrellaSettlementsResponse
     */
    public function addToUmbrellaSettlementMessage(\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementMessage $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementMessage) {
            throw new InvalidArgumentException(sprintf('The UmbrellaSettlementMessage property can only contain items of type \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementMessage, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->UmbrellaSettlementMessage[] = $item;
        
        return $this;
    }
}
