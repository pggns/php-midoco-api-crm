<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MoveUmbrellaSettlementFeesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MoveUmbrellaSettlementFeesRequest extends AbstractStructBase
{
    /**
     * The SettingID
     * @var int|null
     */
    protected ?int $SettingID = null;
    /**
     * The FeeID
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    protected ?array $FeeID = null;
    /**
     * The Direction
     * @var string|null
     */
    protected ?string $Direction = null;
    /**
     * Constructor method for MoveUmbrellaSettlementFeesRequest
     * @uses MoveUmbrellaSettlementFeesRequest::setSettingID()
     * @uses MoveUmbrellaSettlementFeesRequest::setFeeID()
     * @uses MoveUmbrellaSettlementFeesRequest::setDirection()
     * @param int $settingID
     * @param int[] $feeID
     * @param string $direction
     */
    public function __construct(?int $settingID = null, ?array $feeID = null, ?string $direction = null)
    {
        $this
            ->setSettingID($settingID)
            ->setFeeID($feeID)
            ->setDirection($direction);
    }
    /**
     * Get SettingID value
     * @return int|null
     */
    public function getSettingID(): ?int
    {
        return $this->SettingID;
    }
    /**
     * Set SettingID value
     * @param int $settingID
     * @return \Pggns\MidocoApi\Crm\StructType\MoveUmbrellaSettlementFeesRequest
     */
    public function setSettingID(?int $settingID = null): self
    {
        // validation for constraint: int
        if (!is_null($settingID) && !(is_int($settingID) || ctype_digit($settingID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settingID, true), gettype($settingID)), __LINE__);
        }
        $this->SettingID = $settingID;
        
        return $this;
    }
    /**
     * Get FeeID value
     * @return int[]
     */
    public function getFeeID(): ?array
    {
        return $this->FeeID;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFeeID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFeeID method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFeeIDForArrayConstraintFromSetFeeID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $moveUmbrellaSettlementFeesRequestFeeIDItem) {
            // validation for constraint: itemType
            if (!(is_int($moveUmbrellaSettlementFeesRequestFeeIDItem) || ctype_digit($moveUmbrellaSettlementFeesRequestFeeIDItem))) {
                $invalidValues[] = is_object($moveUmbrellaSettlementFeesRequestFeeIDItem) ? get_class($moveUmbrellaSettlementFeesRequestFeeIDItem) : sprintf('%s(%s)', gettype($moveUmbrellaSettlementFeesRequestFeeIDItem), var_export($moveUmbrellaSettlementFeesRequestFeeIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FeeID property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FeeID value
     * @throws InvalidArgumentException
     * @param int[] $feeID
     * @return \Pggns\MidocoApi\Crm\StructType\MoveUmbrellaSettlementFeesRequest
     */
    public function setFeeID(?array $feeID = null): self
    {
        // validation for constraint: array
        if ('' !== ($feeIDArrayErrorMessage = self::validateFeeIDForArrayConstraintFromSetFeeID($feeID))) {
            throw new InvalidArgumentException($feeIDArrayErrorMessage, __LINE__);
        }
        $this->FeeID = $feeID;
        
        return $this;
    }
    /**
     * Add item to FeeID value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Crm\StructType\MoveUmbrellaSettlementFeesRequest
     */
    public function addToFeeID(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The FeeID property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FeeID[] = $item;
        
        return $this;
    }
    /**
     * Get Direction value
     * @return string|null
     */
    public function getDirection(): ?string
    {
        return $this->Direction;
    }
    /**
     * Set Direction value
     * @uses \Pggns\MidocoApi\Crm\EnumType\Direction::valueIsValid()
     * @uses \Pggns\MidocoApi\Crm\EnumType\Direction::getValidValues()
     * @throws InvalidArgumentException
     * @param string $direction
     * @return \Pggns\MidocoApi\Crm\StructType\MoveUmbrellaSettlementFeesRequest
     */
    public function setDirection(?string $direction = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Crm\EnumType\Direction::valueIsValid($direction)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Crm\EnumType\Direction', is_array($direction) ? implode(', ', $direction) : var_export($direction, true), implode(', ', \Pggns\MidocoApi\Crm\EnumType\Direction::getValidValues())), __LINE__);
        }
        $this->Direction = $direction;
        
        return $this;
    }
}
