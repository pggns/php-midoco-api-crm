<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUmbrellaSettlementMonthRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUmbrellaSettlementMonthRequest extends AbstractStructBase
{
    /**
     * The UmbrellaSettlementDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: UmbrellaSettlementDate
     * @var \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementDate|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementDate $UmbrellaSettlementDate = null;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ID = null;
    /**
     * The Include
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Include = null;
    /**
     * Constructor method for GetUmbrellaSettlementMonthRequest
     * @uses GetUmbrellaSettlementMonthRequest::setUmbrellaSettlementDate()
     * @uses GetUmbrellaSettlementMonthRequest::setID()
     * @uses GetUmbrellaSettlementMonthRequest::setInclude()
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementDate $umbrellaSettlementDate
     * @param int $iD
     * @param string[] $include
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementDate $umbrellaSettlementDate = null, ?int $iD = null, ?array $include = null)
    {
        $this
            ->setUmbrellaSettlementDate($umbrellaSettlementDate)
            ->setID($iD)
            ->setInclude($include);
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
     * @return \Pggns\MidocoApi\Crm\StructType\GetUmbrellaSettlementMonthRequest
     */
    public function setUmbrellaSettlementDate(?\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementDate $umbrellaSettlementDate = null): self
    {
        $this->UmbrellaSettlementDate = $umbrellaSettlementDate;
        
        return $this;
    }
    /**
     * Get ID value
     * @return int|null
     */
    public function getID(): ?int
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param int $iD
     * @return \Pggns\MidocoApi\Crm\StructType\GetUmbrellaSettlementMonthRequest
     */
    public function setID(?int $iD = null): self
    {
        // validation for constraint: int
        if (!is_null($iD) && !(is_int($iD) || ctype_digit($iD))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        
        return $this;
    }
    /**
     * Get Include value
     * @return string[]
     */
    public function getInclude(): ?array
    {
        return $this->Include;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setInclude method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInclude method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIncludeForArrayConstraintFromSetInclude(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUmbrellaSettlementMonthRequestIncludeItem) {
            // validation for constraint: enumeration
            if (!\Pggns\MidocoApi\Crm\EnumType\IncludeUmbrellaSettlementCustomers::valueIsValid($getUmbrellaSettlementMonthRequestIncludeItem)) {
                $invalidValues[] = is_object($getUmbrellaSettlementMonthRequestIncludeItem) ? get_class($getUmbrellaSettlementMonthRequestIncludeItem) : sprintf('%s(%s)', gettype($getUmbrellaSettlementMonthRequestIncludeItem), var_export($getUmbrellaSettlementMonthRequestIncludeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Crm\EnumType\IncludeUmbrellaSettlementCustomers', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Pggns\MidocoApi\Crm\EnumType\IncludeUmbrellaSettlementCustomers::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Include value
     * @uses \Pggns\MidocoApi\Crm\EnumType\IncludeUmbrellaSettlementCustomers::valueIsValid()
     * @uses \Pggns\MidocoApi\Crm\EnumType\IncludeUmbrellaSettlementCustomers::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $include
     * @return \Pggns\MidocoApi\Crm\StructType\GetUmbrellaSettlementMonthRequest
     */
    public function setInclude(?array $include = null): self
    {
        // validation for constraint: array
        if ('' !== ($includeArrayErrorMessage = self::validateIncludeForArrayConstraintFromSetInclude($include))) {
            throw new InvalidArgumentException($includeArrayErrorMessage, __LINE__);
        }
        $this->Include = $include;
        
        return $this;
    }
    /**
     * Add item to Include value
     * @uses \Pggns\MidocoApi\Crm\EnumType\IncludeUmbrellaSettlementCustomers::valueIsValid()
     * @uses \Pggns\MidocoApi\Crm\EnumType\IncludeUmbrellaSettlementCustomers::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetUmbrellaSettlementMonthRequest
     */
    public function addToInclude(string $item): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Crm\EnumType\IncludeUmbrellaSettlementCustomers::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Crm\EnumType\IncludeUmbrellaSettlementCustomers', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \Pggns\MidocoApi\Crm\EnumType\IncludeUmbrellaSettlementCustomers::getValidValues())), __LINE__);
        }
        $this->Include[] = $item;
        
        return $this;
    }
}
