<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateUmbrellaSettlementImportsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: The response contains all settlement imports for the month shallowly populated. If the request contained a PopulateImportID, this settlement import is fully populated.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ValidateUmbrellaSettlementImportsResponse extends AbstractStructBase
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
     * The MidocoUmbrellaSettlementImport
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoUmbrellaSettlementImport
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImport[]
     */
    protected ?array $MidocoUmbrellaSettlementImport = null;
    /**
     * Constructor method for ValidateUmbrellaSettlementImportsResponse
     * @uses ValidateUmbrellaSettlementImportsResponse::setSettlementMonthID()
     * @uses ValidateUmbrellaSettlementImportsResponse::setUmbrellaSettlementDate()
     * @uses ValidateUmbrellaSettlementImportsResponse::setMidocoUmbrellaSettlementImport()
     * @param int $settlementMonthID
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementDate $umbrellaSettlementDate
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImport[] $midocoUmbrellaSettlementImport
     */
    public function __construct(?int $settlementMonthID = null, ?\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementDate $umbrellaSettlementDate = null, ?array $midocoUmbrellaSettlementImport = null)
    {
        $this
            ->setSettlementMonthID($settlementMonthID)
            ->setUmbrellaSettlementDate($umbrellaSettlementDate)
            ->setMidocoUmbrellaSettlementImport($midocoUmbrellaSettlementImport);
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
     * @return \Pggns\MidocoApi\Crm\StructType\ValidateUmbrellaSettlementImportsResponse
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
     * @return \Pggns\MidocoApi\Crm\StructType\ValidateUmbrellaSettlementImportsResponse
     */
    public function setUmbrellaSettlementDate(?\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementDate $umbrellaSettlementDate = null): self
    {
        $this->UmbrellaSettlementDate = $umbrellaSettlementDate;
        
        return $this;
    }
    /**
     * Get MidocoUmbrellaSettlementImport value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImport[]
     */
    public function getMidocoUmbrellaSettlementImport(): ?array
    {
        return $this->MidocoUmbrellaSettlementImport;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoUmbrellaSettlementImport method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoUmbrellaSettlementImport method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoUmbrellaSettlementImportForArrayConstraintFromSetMidocoUmbrellaSettlementImport(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $validateUmbrellaSettlementImportsResponseMidocoUmbrellaSettlementImportItem) {
            // validation for constraint: itemType
            if (!$validateUmbrellaSettlementImportsResponseMidocoUmbrellaSettlementImportItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImport) {
                $invalidValues[] = is_object($validateUmbrellaSettlementImportsResponseMidocoUmbrellaSettlementImportItem) ? get_class($validateUmbrellaSettlementImportsResponseMidocoUmbrellaSettlementImportItem) : sprintf('%s(%s)', gettype($validateUmbrellaSettlementImportsResponseMidocoUmbrellaSettlementImportItem), var_export($validateUmbrellaSettlementImportsResponseMidocoUmbrellaSettlementImportItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoUmbrellaSettlementImport property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImport, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoUmbrellaSettlementImport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImport[] $midocoUmbrellaSettlementImport
     * @return \Pggns\MidocoApi\Crm\StructType\ValidateUmbrellaSettlementImportsResponse
     */
    public function setMidocoUmbrellaSettlementImport(?array $midocoUmbrellaSettlementImport = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoUmbrellaSettlementImportArrayErrorMessage = self::validateMidocoUmbrellaSettlementImportForArrayConstraintFromSetMidocoUmbrellaSettlementImport($midocoUmbrellaSettlementImport))) {
            throw new InvalidArgumentException($midocoUmbrellaSettlementImportArrayErrorMessage, __LINE__);
        }
        $this->MidocoUmbrellaSettlementImport = $midocoUmbrellaSettlementImport;
        
        return $this;
    }
    /**
     * Add item to MidocoUmbrellaSettlementImport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImport $item
     * @return \Pggns\MidocoApi\Crm\StructType\ValidateUmbrellaSettlementImportsResponse
     */
    public function addToMidocoUmbrellaSettlementImport(\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImport $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImport) {
            throw new InvalidArgumentException(sprintf('The MidocoUmbrellaSettlementImport property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImport, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoUmbrellaSettlementImport[] = $item;
        
        return $this;
    }
}
