<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAgency StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoAgency extends AgencyDetailDTO
{
    /**
     * The MidocoAgencyCommission
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAgencyCommission
     * @var \Pggns\MidocoApi\Crm\StructType\AgencyCommissionDTO[]
     */
    protected ?array $MidocoAgencyCommission = null;
    /**
     * The MidocoCrmCustomer
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCustomer
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $MidocoCrmCustomer = null;
    /**
     * The MidocoCrmCustomerPayment
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCustomerPayment
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment $MidocoCrmCustomerPayment = null;
    /**
     * The cooperationName
     * @var string|null
     */
    protected ?string $cooperationName = null;
    /**
     * Constructor method for MidocoAgency
     * @uses MidocoAgency::setMidocoAgencyCommission()
     * @uses MidocoAgency::setMidocoCrmCustomer()
     * @uses MidocoAgency::setMidocoCrmCustomerPayment()
     * @uses MidocoAgency::setCooperationName()
     * @param \Pggns\MidocoApi\Crm\StructType\AgencyCommissionDTO[] $midocoAgencyCommission
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment $midocoCrmCustomerPayment
     * @param string $cooperationName
     */
    public function __construct(?array $midocoAgencyCommission = null, ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer = null, ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment $midocoCrmCustomerPayment = null, ?string $cooperationName = null)
    {
        $this
            ->setMidocoAgencyCommission($midocoAgencyCommission)
            ->setMidocoCrmCustomer($midocoCrmCustomer)
            ->setMidocoCrmCustomerPayment($midocoCrmCustomerPayment)
            ->setCooperationName($cooperationName);
    }
    /**
     * Get MidocoAgencyCommission value
     * @return \Pggns\MidocoApi\Crm\StructType\AgencyCommissionDTO[]
     */
    public function getMidocoAgencyCommission(): ?array
    {
        return $this->MidocoAgencyCommission;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoAgencyCommission method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAgencyCommission method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAgencyCommissionForArrayConstraintFromSetMidocoAgencyCommission(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoAgencyMidocoAgencyCommissionItem) {
            // validation for constraint: itemType
            if (!$midocoAgencyMidocoAgencyCommissionItem instanceof \Pggns\MidocoApi\Crm\StructType\AgencyCommissionDTO) {
                $invalidValues[] = is_object($midocoAgencyMidocoAgencyCommissionItem) ? get_class($midocoAgencyMidocoAgencyCommissionItem) : sprintf('%s(%s)', gettype($midocoAgencyMidocoAgencyCommissionItem), var_export($midocoAgencyMidocoAgencyCommissionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAgencyCommission property can only contain items of type \Pggns\MidocoApi\Crm\StructType\AgencyCommissionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAgencyCommission value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\AgencyCommissionDTO[] $midocoAgencyCommission
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoAgency
     */
    public function setMidocoAgencyCommission(?array $midocoAgencyCommission = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAgencyCommissionArrayErrorMessage = self::validateMidocoAgencyCommissionForArrayConstraintFromSetMidocoAgencyCommission($midocoAgencyCommission))) {
            throw new InvalidArgumentException($midocoAgencyCommissionArrayErrorMessage, __LINE__);
        }
        $this->MidocoAgencyCommission = $midocoAgencyCommission;
        
        return $this;
    }
    /**
     * Add item to MidocoAgencyCommission value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\AgencyCommissionDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoAgency
     */
    public function addToMidocoAgencyCommission(\Pggns\MidocoApi\Crm\StructType\AgencyCommissionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\AgencyCommissionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoAgencyCommission property can only contain items of type \Pggns\MidocoApi\Crm\StructType\AgencyCommissionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAgencyCommission[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmCustomer value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer|null
     */
    public function getMidocoCrmCustomer(): ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer
    {
        return $this->MidocoCrmCustomer;
    }
    /**
     * Set MidocoCrmCustomer value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoAgency
     */
    public function setMidocoCrmCustomer(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer = null): self
    {
        $this->MidocoCrmCustomer = $midocoCrmCustomer;
        
        return $this;
    }
    /**
     * Get MidocoCrmCustomerPayment value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment|null
     */
    public function getMidocoCrmCustomerPayment(): ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment
    {
        return $this->MidocoCrmCustomerPayment;
    }
    /**
     * Set MidocoCrmCustomerPayment value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment $midocoCrmCustomerPayment
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoAgency
     */
    public function setMidocoCrmCustomerPayment(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment $midocoCrmCustomerPayment = null): self
    {
        $this->MidocoCrmCustomerPayment = $midocoCrmCustomerPayment;
        
        return $this;
    }
    /**
     * Get cooperationName value
     * @return string|null
     */
    public function getCooperationName(): ?string
    {
        return $this->cooperationName;
    }
    /**
     * Set cooperationName value
     * @param string $cooperationName
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoAgency
     */
    public function setCooperationName(?string $cooperationName = null): self
    {
        // validation for constraint: string
        if (!is_null($cooperationName) && !is_string($cooperationName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cooperationName, true), gettype($cooperationName)), __LINE__);
        }
        $this->cooperationName = $cooperationName;
        
        return $this;
    }
}
