<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExcludeUmbrellaSettlementImportLineRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Update one or more attributes of an imported file:<br> description, customerID or charset.<br> <br> When the charset is changed, the file has to be parsed again. So changing the charset is not allowed after settlement positions were
 * prepared for the import.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExcludeUmbrellaSettlementImportLineRequest extends AbstractStructBase
{
    /**
     * The exclude
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $exclude;
    /**
     * The settlementMonthID
     * @var int|null
     */
    protected ?int $settlementMonthID = null;
    /**
     * The importID
     * @var int|null
     */
    protected ?int $importID = null;
    /**
     * The lineNo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    protected ?array $lineNo = null;
    /**
     * Constructor method for ExcludeUmbrellaSettlementImportLineRequest
     * @uses ExcludeUmbrellaSettlementImportLineRequest::setExclude()
     * @uses ExcludeUmbrellaSettlementImportLineRequest::setSettlementMonthID()
     * @uses ExcludeUmbrellaSettlementImportLineRequest::setImportID()
     * @uses ExcludeUmbrellaSettlementImportLineRequest::setLineNo()
     * @param bool $exclude
     * @param int $settlementMonthID
     * @param int $importID
     * @param int[] $lineNo
     */
    public function __construct(bool $exclude, ?int $settlementMonthID = null, ?int $importID = null, ?array $lineNo = null)
    {
        $this
            ->setExclude($exclude)
            ->setSettlementMonthID($settlementMonthID)
            ->setImportID($importID)
            ->setLineNo($lineNo);
    }
    /**
     * Get exclude value
     * @return bool
     */
    public function getExclude(): bool
    {
        return $this->exclude;
    }
    /**
     * Set exclude value
     * @param bool $exclude
     * @return \Pggns\MidocoApi\Crm\StructType\ExcludeUmbrellaSettlementImportLineRequest
     */
    public function setExclude(bool $exclude): self
    {
        // validation for constraint: boolean
        if (!is_null($exclude) && !is_bool($exclude)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exclude, true), gettype($exclude)), __LINE__);
        }
        $this->exclude = $exclude;
        
        return $this;
    }
    /**
     * Get settlementMonthID value
     * @return int|null
     */
    public function getSettlementMonthID(): ?int
    {
        return $this->settlementMonthID;
    }
    /**
     * Set settlementMonthID value
     * @param int $settlementMonthID
     * @return \Pggns\MidocoApi\Crm\StructType\ExcludeUmbrellaSettlementImportLineRequest
     */
    public function setSettlementMonthID(?int $settlementMonthID = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementMonthID) && !(is_int($settlementMonthID) || ctype_digit($settlementMonthID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementMonthID, true), gettype($settlementMonthID)), __LINE__);
        }
        $this->settlementMonthID = $settlementMonthID;
        
        return $this;
    }
    /**
     * Get importID value
     * @return int|null
     */
    public function getImportID(): ?int
    {
        return $this->importID;
    }
    /**
     * Set importID value
     * @param int $importID
     * @return \Pggns\MidocoApi\Crm\StructType\ExcludeUmbrellaSettlementImportLineRequest
     */
    public function setImportID(?int $importID = null): self
    {
        // validation for constraint: int
        if (!is_null($importID) && !(is_int($importID) || ctype_digit($importID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($importID, true), gettype($importID)), __LINE__);
        }
        $this->importID = $importID;
        
        return $this;
    }
    /**
     * Get lineNo value
     * @return int[]
     */
    public function getLineNo(): ?array
    {
        return $this->lineNo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setLineNo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLineNo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLineNoForArrayConstraintFromSetLineNo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $excludeUmbrellaSettlementImportLineRequestLineNoItem) {
            // validation for constraint: itemType
            if (!(is_int($excludeUmbrellaSettlementImportLineRequestLineNoItem) || ctype_digit($excludeUmbrellaSettlementImportLineRequestLineNoItem))) {
                $invalidValues[] = is_object($excludeUmbrellaSettlementImportLineRequestLineNoItem) ? get_class($excludeUmbrellaSettlementImportLineRequestLineNoItem) : sprintf('%s(%s)', gettype($excludeUmbrellaSettlementImportLineRequestLineNoItem), var_export($excludeUmbrellaSettlementImportLineRequestLineNoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The lineNo property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set lineNo value
     * @throws InvalidArgumentException
     * @param int[] $lineNo
     * @return \Pggns\MidocoApi\Crm\StructType\ExcludeUmbrellaSettlementImportLineRequest
     */
    public function setLineNo(?array $lineNo = null): self
    {
        // validation for constraint: array
        if ('' !== ($lineNoArrayErrorMessage = self::validateLineNoForArrayConstraintFromSetLineNo($lineNo))) {
            throw new InvalidArgumentException($lineNoArrayErrorMessage, __LINE__);
        }
        $this->lineNo = $lineNo;
        
        return $this;
    }
    /**
     * Add item to lineNo value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Crm\StructType\ExcludeUmbrellaSettlementImportLineRequest
     */
    public function addToLineNo(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The lineNo property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->lineNo[] = $item;
        
        return $this;
    }
}
