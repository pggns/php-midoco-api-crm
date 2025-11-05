<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUmbrellaSettlementImportRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Request a file that was imported for an UmbrellaSettlementMonth.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUmbrellaSettlementImportRequest extends AbstractStructBase
{
    /**
     * The importID
     * @var int|null
     */
    protected ?int $importID = null;
    /**
     * Constructor method for GetUmbrellaSettlementImportRequest
     * @uses GetUmbrellaSettlementImportRequest::setImportID()
     * @param int $importID
     */
    public function __construct(?int $importID = null)
    {
        $this
            ->setImportID($importID);
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
     * @return \Pggns\MidocoApi\Crm\StructType\GetUmbrellaSettlementImportRequest
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
}
