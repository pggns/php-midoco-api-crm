<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefreshUmbrellaSettlementCustomerSortKeysRequest
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Refresh the sort key of all UmbrellaSettlementCustomers, that do not yet have prepared settlement positions. <p> Note that this is also done when an import is validated or when settlement positions are prepared.<br> This operation
 * fills the following gap: If sort keys are added or changed in the settlement settings, the user can make the settlement customers aware of the changes <em>without</em> having to validate an import or prepare settlement positions. </p>
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RefreshUmbrellaSettlementCustomerSortKeysRequest extends AbstractStructBase
{
    /**
     * The settlementMonthID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $settlementMonthID = null;
    /**
     * The Include
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Include = null;
    /**
     * Constructor method for RefreshUmbrellaSettlementCustomerSortKeysRequest
     * @uses RefreshUmbrellaSettlementCustomerSortKeysRequest::setSettlementMonthID()
     * @uses RefreshUmbrellaSettlementCustomerSortKeysRequest::setInclude()
     * @param int $settlementMonthID
     * @param string[] $include
     */
    public function __construct(?int $settlementMonthID = null, ?array $include = null)
    {
        $this
            ->setSettlementMonthID($settlementMonthID)
            ->setInclude($include);
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
     * @return \Pggns\MidocoApi\Crm\StructType\RefreshUmbrellaSettlementCustomerSortKeysRequest
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
        foreach ($values as $refreshUmbrellaSettlementCustomerSortKeysRequestIncludeItem) {
            // validation for constraint: enumeration
            if (!\Pggns\MidocoApi\Crm\EnumType\IncludeUmbrellaSettlementCustomers::valueIsValid($refreshUmbrellaSettlementCustomerSortKeysRequestIncludeItem)) {
                $invalidValues[] = is_object($refreshUmbrellaSettlementCustomerSortKeysRequestIncludeItem) ? get_class($refreshUmbrellaSettlementCustomerSortKeysRequestIncludeItem) : sprintf('%s(%s)', gettype($refreshUmbrellaSettlementCustomerSortKeysRequestIncludeItem), var_export($refreshUmbrellaSettlementCustomerSortKeysRequestIncludeItem, true));
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
     * @return \Pggns\MidocoApi\Crm\StructType\RefreshUmbrellaSettlementCustomerSortKeysRequest
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
     * @return \Pggns\MidocoApi\Crm\StructType\RefreshUmbrellaSettlementCustomerSortKeysRequest
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
