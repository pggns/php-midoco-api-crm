<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchCustomerRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchCustomerRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmCustomer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCrmCustomer
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $MidocoCrmCustomer = null;
    /**
     * The MidocoCrmSearchContact
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCrmSearchContact
     * @var \Pggns\MidocoApi\Crm\StructType\CrmSearchContactDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CrmSearchContactDTO $MidocoCrmSearchContact = null;
    /**
     * The MidocoMediatorTravels
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoMediatorTravels|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoMediatorTravels $MidocoMediatorTravels = null;
    /**
     * The maxReturned
     * @var int|null
     */
    protected ?int $maxReturned = null;
    /**
     * The filter
     * Meta information extracted from the WSDL
     * - default: NONE
     * @var string|null
     */
    protected ?string $filter = null;
    /**
     * The profileNo
     * @var string|null
     */
    protected ?string $profileNo = null;
    /**
     * The includePassengers
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $includePassengers = null;
    /**
     * The criteriaType
     * @var string|null
     */
    protected ?string $criteriaType = null;
    /**
     * The criteriaValue
     * @var string|null
     */
    protected ?string $criteriaValue = null;
    /**
     * The neighbourType
     * @var string|null
     */
    protected ?string $neighbourType = null;
    /**
     * The mandateReference
     * @var string|null
     */
    protected ?string $mandateReference = null;
    /**
     * The calledFromOrder
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $calledFromOrder = null;
    /**
     * The calledFromOrderUtils
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $calledFromOrderUtils = null;
    /**
     * The includeLockedCustomers
     * @var bool|null
     */
    protected ?bool $includeLockedCustomers = null;
    /**
     * The iban
     * @var string|null
     */
    protected ?string $iban = null;
    /**
     * The creditCard
     * @var string|null
     */
    protected ?string $creditCard = null;
    /**
     * The doSearchExternalCustomer
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $doSearchExternalCustomer = null;
    /**
     * Constructor method for SearchCustomerRequest
     * @uses SearchCustomerRequest::setMidocoCrmCustomer()
     * @uses SearchCustomerRequest::setMidocoCrmSearchContact()
     * @uses SearchCustomerRequest::setMidocoMediatorTravels()
     * @uses SearchCustomerRequest::setMaxReturned()
     * @uses SearchCustomerRequest::setFilter()
     * @uses SearchCustomerRequest::setProfileNo()
     * @uses SearchCustomerRequest::setIncludePassengers()
     * @uses SearchCustomerRequest::setCriteriaType()
     * @uses SearchCustomerRequest::setCriteriaValue()
     * @uses SearchCustomerRequest::setNeighbourType()
     * @uses SearchCustomerRequest::setMandateReference()
     * @uses SearchCustomerRequest::setCalledFromOrder()
     * @uses SearchCustomerRequest::setCalledFromOrderUtils()
     * @uses SearchCustomerRequest::setIncludeLockedCustomers()
     * @uses SearchCustomerRequest::setIban()
     * @uses SearchCustomerRequest::setCreditCard()
     * @uses SearchCustomerRequest::setDoSearchExternalCustomer()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer
     * @param \Pggns\MidocoApi\Crm\StructType\CrmSearchContactDTO $midocoCrmSearchContact
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoMediatorTravels $midocoMediatorTravels
     * @param int $maxReturned
     * @param string $filter
     * @param string $profileNo
     * @param bool $includePassengers
     * @param string $criteriaType
     * @param string $criteriaValue
     * @param string $neighbourType
     * @param string $mandateReference
     * @param bool $calledFromOrder
     * @param bool $calledFromOrderUtils
     * @param bool $includeLockedCustomers
     * @param string $iban
     * @param string $creditCard
     * @param bool $doSearchExternalCustomer
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer = null, ?\Pggns\MidocoApi\Crm\StructType\CrmSearchContactDTO $midocoCrmSearchContact = null, ?\Pggns\MidocoApi\Crm\StructType\MidocoMediatorTravels $midocoMediatorTravels = null, ?int $maxReturned = null, ?string $filter = 'NONE', ?string $profileNo = null, ?bool $includePassengers = false, ?string $criteriaType = null, ?string $criteriaValue = null, ?string $neighbourType = null, ?string $mandateReference = null, ?bool $calledFromOrder = false, ?bool $calledFromOrderUtils = false, ?bool $includeLockedCustomers = null, ?string $iban = null, ?string $creditCard = null, ?bool $doSearchExternalCustomer = false)
    {
        $this
            ->setMidocoCrmCustomer($midocoCrmCustomer)
            ->setMidocoCrmSearchContact($midocoCrmSearchContact)
            ->setMidocoMediatorTravels($midocoMediatorTravels)
            ->setMaxReturned($maxReturned)
            ->setFilter($filter)
            ->setProfileNo($profileNo)
            ->setIncludePassengers($includePassengers)
            ->setCriteriaType($criteriaType)
            ->setCriteriaValue($criteriaValue)
            ->setNeighbourType($neighbourType)
            ->setMandateReference($mandateReference)
            ->setCalledFromOrder($calledFromOrder)
            ->setCalledFromOrderUtils($calledFromOrderUtils)
            ->setIncludeLockedCustomers($includeLockedCustomers)
            ->setIban($iban)
            ->setCreditCard($creditCard)
            ->setDoSearchExternalCustomer($doSearchExternalCustomer);
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
     * @return \Pggns\MidocoApi\Crm\StructType\SearchCustomerRequest
     */
    public function setMidocoCrmCustomer(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer = null): self
    {
        $this->MidocoCrmCustomer = $midocoCrmCustomer;
        
        return $this;
    }
    /**
     * Get MidocoCrmSearchContact value
     * @return \Pggns\MidocoApi\Crm\StructType\CrmSearchContactDTO|null
     */
    public function getMidocoCrmSearchContact(): ?\Pggns\MidocoApi\Crm\StructType\CrmSearchContactDTO
    {
        return $this->MidocoCrmSearchContact;
    }
    /**
     * Set MidocoCrmSearchContact value
     * @param \Pggns\MidocoApi\Crm\StructType\CrmSearchContactDTO $midocoCrmSearchContact
     * @return \Pggns\MidocoApi\Crm\StructType\SearchCustomerRequest
     */
    public function setMidocoCrmSearchContact(?\Pggns\MidocoApi\Crm\StructType\CrmSearchContactDTO $midocoCrmSearchContact = null): self
    {
        $this->MidocoCrmSearchContact = $midocoCrmSearchContact;
        
        return $this;
    }
    /**
     * Get MidocoMediatorTravels value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMediatorTravels|null
     */
    public function getMidocoMediatorTravels(): ?\Pggns\MidocoApi\Crm\StructType\MidocoMediatorTravels
    {
        return $this->MidocoMediatorTravels;
    }
    /**
     * Set MidocoMediatorTravels value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoMediatorTravels $midocoMediatorTravels
     * @return \Pggns\MidocoApi\Crm\StructType\SearchCustomerRequest
     */
    public function setMidocoMediatorTravels(?\Pggns\MidocoApi\Crm\StructType\MidocoMediatorTravels $midocoMediatorTravels = null): self
    {
        $this->MidocoMediatorTravels = $midocoMediatorTravels;
        
        return $this;
    }
    /**
     * Get maxReturned value
     * @return int|null
     */
    public function getMaxReturned(): ?int
    {
        return $this->maxReturned;
    }
    /**
     * Set maxReturned value
     * @param int $maxReturned
     * @return \Pggns\MidocoApi\Crm\StructType\SearchCustomerRequest
     */
    public function setMaxReturned(?int $maxReturned = null): self
    {
        // validation for constraint: int
        if (!is_null($maxReturned) && !(is_int($maxReturned) || ctype_digit($maxReturned))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxReturned, true), gettype($maxReturned)), __LINE__);
        }
        $this->maxReturned = $maxReturned;
        
        return $this;
    }
    /**
     * Get filter value
     * @return string|null
     */
    public function getFilter(): ?string
    {
        return $this->filter;
    }
    /**
     * Set filter value
     * @param string $filter
     * @return \Pggns\MidocoApi\Crm\StructType\SearchCustomerRequest
     */
    public function setFilter(?string $filter = 'NONE'): self
    {
        // validation for constraint: string
        if (!is_null($filter) && !is_string($filter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filter, true), gettype($filter)), __LINE__);
        }
        $this->filter = $filter;
        
        return $this;
    }
    /**
     * Get profileNo value
     * @return string|null
     */
    public function getProfileNo(): ?string
    {
        return $this->profileNo;
    }
    /**
     * Set profileNo value
     * @param string $profileNo
     * @return \Pggns\MidocoApi\Crm\StructType\SearchCustomerRequest
     */
    public function setProfileNo(?string $profileNo = null): self
    {
        // validation for constraint: string
        if (!is_null($profileNo) && !is_string($profileNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($profileNo, true), gettype($profileNo)), __LINE__);
        }
        $this->profileNo = $profileNo;
        
        return $this;
    }
    /**
     * Get includePassengers value
     * @return bool|null
     */
    public function getIncludePassengers(): ?bool
    {
        return $this->includePassengers;
    }
    /**
     * Set includePassengers value
     * @param bool $includePassengers
     * @return \Pggns\MidocoApi\Crm\StructType\SearchCustomerRequest
     */
    public function setIncludePassengers(?bool $includePassengers = false): self
    {
        // validation for constraint: boolean
        if (!is_null($includePassengers) && !is_bool($includePassengers)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includePassengers, true), gettype($includePassengers)), __LINE__);
        }
        $this->includePassengers = $includePassengers;
        
        return $this;
    }
    /**
     * Get criteriaType value
     * @return string|null
     */
    public function getCriteriaType(): ?string
    {
        return $this->criteriaType;
    }
    /**
     * Set criteriaType value
     * @param string $criteriaType
     * @return \Pggns\MidocoApi\Crm\StructType\SearchCustomerRequest
     */
    public function setCriteriaType(?string $criteriaType = null): self
    {
        // validation for constraint: string
        if (!is_null($criteriaType) && !is_string($criteriaType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($criteriaType, true), gettype($criteriaType)), __LINE__);
        }
        $this->criteriaType = $criteriaType;
        
        return $this;
    }
    /**
     * Get criteriaValue value
     * @return string|null
     */
    public function getCriteriaValue(): ?string
    {
        return $this->criteriaValue;
    }
    /**
     * Set criteriaValue value
     * @param string $criteriaValue
     * @return \Pggns\MidocoApi\Crm\StructType\SearchCustomerRequest
     */
    public function setCriteriaValue(?string $criteriaValue = null): self
    {
        // validation for constraint: string
        if (!is_null($criteriaValue) && !is_string($criteriaValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($criteriaValue, true), gettype($criteriaValue)), __LINE__);
        }
        $this->criteriaValue = $criteriaValue;
        
        return $this;
    }
    /**
     * Get neighbourType value
     * @return string|null
     */
    public function getNeighbourType(): ?string
    {
        return $this->neighbourType;
    }
    /**
     * Set neighbourType value
     * @param string $neighbourType
     * @return \Pggns\MidocoApi\Crm\StructType\SearchCustomerRequest
     */
    public function setNeighbourType(?string $neighbourType = null): self
    {
        // validation for constraint: string
        if (!is_null($neighbourType) && !is_string($neighbourType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($neighbourType, true), gettype($neighbourType)), __LINE__);
        }
        $this->neighbourType = $neighbourType;
        
        return $this;
    }
    /**
     * Get mandateReference value
     * @return string|null
     */
    public function getMandateReference(): ?string
    {
        return $this->mandateReference;
    }
    /**
     * Set mandateReference value
     * @param string $mandateReference
     * @return \Pggns\MidocoApi\Crm\StructType\SearchCustomerRequest
     */
    public function setMandateReference(?string $mandateReference = null): self
    {
        // validation for constraint: string
        if (!is_null($mandateReference) && !is_string($mandateReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mandateReference, true), gettype($mandateReference)), __LINE__);
        }
        $this->mandateReference = $mandateReference;
        
        return $this;
    }
    /**
     * Get calledFromOrder value
     * @return bool|null
     */
    public function getCalledFromOrder(): ?bool
    {
        return $this->calledFromOrder;
    }
    /**
     * Set calledFromOrder value
     * @param bool $calledFromOrder
     * @return \Pggns\MidocoApi\Crm\StructType\SearchCustomerRequest
     */
    public function setCalledFromOrder(?bool $calledFromOrder = false): self
    {
        // validation for constraint: boolean
        if (!is_null($calledFromOrder) && !is_bool($calledFromOrder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($calledFromOrder, true), gettype($calledFromOrder)), __LINE__);
        }
        $this->calledFromOrder = $calledFromOrder;
        
        return $this;
    }
    /**
     * Get calledFromOrderUtils value
     * @return bool|null
     */
    public function getCalledFromOrderUtils(): ?bool
    {
        return $this->calledFromOrderUtils;
    }
    /**
     * Set calledFromOrderUtils value
     * @param bool $calledFromOrderUtils
     * @return \Pggns\MidocoApi\Crm\StructType\SearchCustomerRequest
     */
    public function setCalledFromOrderUtils(?bool $calledFromOrderUtils = false): self
    {
        // validation for constraint: boolean
        if (!is_null($calledFromOrderUtils) && !is_bool($calledFromOrderUtils)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($calledFromOrderUtils, true), gettype($calledFromOrderUtils)), __LINE__);
        }
        $this->calledFromOrderUtils = $calledFromOrderUtils;
        
        return $this;
    }
    /**
     * Get includeLockedCustomers value
     * @return bool|null
     */
    public function getIncludeLockedCustomers(): ?bool
    {
        return $this->includeLockedCustomers;
    }
    /**
     * Set includeLockedCustomers value
     * @param bool $includeLockedCustomers
     * @return \Pggns\MidocoApi\Crm\StructType\SearchCustomerRequest
     */
    public function setIncludeLockedCustomers(?bool $includeLockedCustomers = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeLockedCustomers) && !is_bool($includeLockedCustomers)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeLockedCustomers, true), gettype($includeLockedCustomers)), __LINE__);
        }
        $this->includeLockedCustomers = $includeLockedCustomers;
        
        return $this;
    }
    /**
     * Get iban value
     * @return string|null
     */
    public function getIban(): ?string
    {
        return $this->iban;
    }
    /**
     * Set iban value
     * @param string $iban
     * @return \Pggns\MidocoApi\Crm\StructType\SearchCustomerRequest
     */
    public function setIban(?string $iban = null): self
    {
        // validation for constraint: string
        if (!is_null($iban) && !is_string($iban)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iban, true), gettype($iban)), __LINE__);
        }
        $this->iban = $iban;
        
        return $this;
    }
    /**
     * Get creditCard value
     * @return string|null
     */
    public function getCreditCard(): ?string
    {
        return $this->creditCard;
    }
    /**
     * Set creditCard value
     * @param string $creditCard
     * @return \Pggns\MidocoApi\Crm\StructType\SearchCustomerRequest
     */
    public function setCreditCard(?string $creditCard = null): self
    {
        // validation for constraint: string
        if (!is_null($creditCard) && !is_string($creditCard)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditCard, true), gettype($creditCard)), __LINE__);
        }
        $this->creditCard = $creditCard;
        
        return $this;
    }
    /**
     * Get doSearchExternalCustomer value
     * @return bool|null
     */
    public function getDoSearchExternalCustomer(): ?bool
    {
        return $this->doSearchExternalCustomer;
    }
    /**
     * Set doSearchExternalCustomer value
     * @param bool $doSearchExternalCustomer
     * @return \Pggns\MidocoApi\Crm\StructType\SearchCustomerRequest
     */
    public function setDoSearchExternalCustomer(?bool $doSearchExternalCustomer = false): self
    {
        // validation for constraint: boolean
        if (!is_null($doSearchExternalCustomer) && !is_bool($doSearchExternalCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($doSearchExternalCustomer, true), gettype($doSearchExternalCustomer)), __LINE__);
        }
        $this->doSearchExternalCustomer = $doSearchExternalCustomer;
        
        return $this;
    }
}
