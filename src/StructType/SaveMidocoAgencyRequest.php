<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoAgencyRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMidocoAgencyRequest extends AbstractStructBase
{
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
     * - minOccurs: 0
     * - ref: MidocoCrmCustomerPayment
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment $MidocoCrmCustomerPayment = null;
    /**
     * The MidocoCrmDebitCard
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmDebitCard
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard[]
     */
    protected ?array $MidocoCrmDebitCard = null;
    /**
     * The AgencyProperties
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AgencyProperties
     * @var \Pggns\MidocoApi\Crm\StructType\AgencyProperties|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\AgencyProperties $AgencyProperties = null;
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
     * Constructor method for SaveMidocoAgencyRequest
     * @uses SaveMidocoAgencyRequest::setMidocoCrmCustomer()
     * @uses SaveMidocoAgencyRequest::setMidocoCrmCustomerPayment()
     * @uses SaveMidocoAgencyRequest::setMidocoCrmDebitCard()
     * @uses SaveMidocoAgencyRequest::setAgencyProperties()
     * @uses SaveMidocoAgencyRequest::setMidocoAgencyCommission()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment $midocoCrmCustomerPayment
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard[] $midocoCrmDebitCard
     * @param \Pggns\MidocoApi\Crm\StructType\AgencyProperties $agencyProperties
     * @param \Pggns\MidocoApi\Crm\StructType\AgencyCommissionDTO[] $midocoAgencyCommission
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer = null, ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment $midocoCrmCustomerPayment = null, ?array $midocoCrmDebitCard = null, ?\Pggns\MidocoApi\Crm\StructType\AgencyProperties $agencyProperties = null, ?array $midocoAgencyCommission = null)
    {
        $this
            ->setMidocoCrmCustomer($midocoCrmCustomer)
            ->setMidocoCrmCustomerPayment($midocoCrmCustomerPayment)
            ->setMidocoCrmDebitCard($midocoCrmDebitCard)
            ->setAgencyProperties($agencyProperties)
            ->setMidocoAgencyCommission($midocoAgencyCommission);
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
     * @return \Pggns\MidocoApi\Crm\StructType\SaveMidocoAgencyRequest
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
     * @return \Pggns\MidocoApi\Crm\StructType\SaveMidocoAgencyRequest
     */
    public function setMidocoCrmCustomerPayment(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment $midocoCrmCustomerPayment = null): self
    {
        $this->MidocoCrmCustomerPayment = $midocoCrmCustomerPayment;
        
        return $this;
    }
    /**
     * Get MidocoCrmDebitCard value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard[]
     */
    public function getMidocoCrmDebitCard(): ?array
    {
        return $this->MidocoCrmDebitCard;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmDebitCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmDebitCard method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmDebitCardForArrayConstraintFromSetMidocoCrmDebitCard(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveMidocoAgencyRequestMidocoCrmDebitCardItem) {
            // validation for constraint: itemType
            if (!$saveMidocoAgencyRequestMidocoCrmDebitCardItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard) {
                $invalidValues[] = is_object($saveMidocoAgencyRequestMidocoCrmDebitCardItem) ? get_class($saveMidocoAgencyRequestMidocoCrmDebitCardItem) : sprintf('%s(%s)', gettype($saveMidocoAgencyRequestMidocoCrmDebitCardItem), var_export($saveMidocoAgencyRequestMidocoCrmDebitCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmDebitCard property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmDebitCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard[] $midocoCrmDebitCard
     * @return \Pggns\MidocoApi\Crm\StructType\SaveMidocoAgencyRequest
     */
    public function setMidocoCrmDebitCard(?array $midocoCrmDebitCard = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmDebitCardArrayErrorMessage = self::validateMidocoCrmDebitCardForArrayConstraintFromSetMidocoCrmDebitCard($midocoCrmDebitCard))) {
            throw new InvalidArgumentException($midocoCrmDebitCardArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmDebitCard = $midocoCrmDebitCard;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmDebitCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard $item
     * @return \Pggns\MidocoApi\Crm\StructType\SaveMidocoAgencyRequest
     */
    public function addToMidocoCrmDebitCard(\Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmDebitCard property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmDebitCard[] = $item;
        
        return $this;
    }
    /**
     * Get AgencyProperties value
     * @return \Pggns\MidocoApi\Crm\StructType\AgencyProperties|null
     */
    public function getAgencyProperties(): ?\Pggns\MidocoApi\Crm\StructType\AgencyProperties
    {
        return $this->AgencyProperties;
    }
    /**
     * Set AgencyProperties value
     * @param \Pggns\MidocoApi\Crm\StructType\AgencyProperties $agencyProperties
     * @return \Pggns\MidocoApi\Crm\StructType\SaveMidocoAgencyRequest
     */
    public function setAgencyProperties(?\Pggns\MidocoApi\Crm\StructType\AgencyProperties $agencyProperties = null): self
    {
        $this->AgencyProperties = $agencyProperties;
        
        return $this;
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
        foreach ($values as $saveMidocoAgencyRequestMidocoAgencyCommissionItem) {
            // validation for constraint: itemType
            if (!$saveMidocoAgencyRequestMidocoAgencyCommissionItem instanceof \Pggns\MidocoApi\Crm\StructType\AgencyCommissionDTO) {
                $invalidValues[] = is_object($saveMidocoAgencyRequestMidocoAgencyCommissionItem) ? get_class($saveMidocoAgencyRequestMidocoAgencyCommissionItem) : sprintf('%s(%s)', gettype($saveMidocoAgencyRequestMidocoAgencyCommissionItem), var_export($saveMidocoAgencyRequestMidocoAgencyCommissionItem, true));
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
     * @return \Pggns\MidocoApi\Crm\StructType\SaveMidocoAgencyRequest
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
     * @return \Pggns\MidocoApi\Crm\StructType\SaveMidocoAgencyRequest
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
}
