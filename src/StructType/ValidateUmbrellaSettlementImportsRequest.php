<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateUmbrellaSettlementImportsRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Remove validation information from all settlement imports, refresh the sort keys of the settlement customers, and validate all values that are actually needed. Examples of why values are not validated: The sort key does not match a
 * customer, the column name is not referenced.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ValidateUmbrellaSettlementImportsRequest extends AbstractStructBase
{
    /**
     * The SettlementMonthID
     * @var int|null
     */
    protected ?int $SettlementMonthID = null;
    /**
     * The PopulateImportID
     * Meta information extracted from the WSDL
     * - documentation: The settlement import that should be returned fully populated. The idea is that if the content of an imported file is displayed in the GUI, we should also update this content as seamlessly as possible.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PopulateImportID = null;
    /**
     * Constructor method for ValidateUmbrellaSettlementImportsRequest
     * @uses ValidateUmbrellaSettlementImportsRequest::setSettlementMonthID()
     * @uses ValidateUmbrellaSettlementImportsRequest::setPopulateImportID()
     * @param int $settlementMonthID
     * @param int $populateImportID
     */
    public function __construct(?int $settlementMonthID = null, ?int $populateImportID = null)
    {
        $this
            ->setSettlementMonthID($settlementMonthID)
            ->setPopulateImportID($populateImportID);
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
     * @return \Pggns\MidocoApi\Crm\StructType\ValidateUmbrellaSettlementImportsRequest
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
     * Get PopulateImportID value
     * @return int|null
     */
    public function getPopulateImportID(): ?int
    {
        return $this->PopulateImportID;
    }
    /**
     * Set PopulateImportID value
     * @param int $populateImportID
     * @return \Pggns\MidocoApi\Crm\StructType\ValidateUmbrellaSettlementImportsRequest
     */
    public function setPopulateImportID(?int $populateImportID = null): self
    {
        // validation for constraint: int
        if (!is_null($populateImportID) && !(is_int($populateImportID) || ctype_digit($populateImportID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($populateImportID, true), gettype($populateImportID)), __LINE__);
        }
        $this->PopulateImportID = $populateImportID;
        
        return $this;
    }
}
