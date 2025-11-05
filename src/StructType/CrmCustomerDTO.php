<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmCustomerDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CrmCustomerDTO extends CustomerDTO
{
    /**
     * The MidocoCrmAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCrmAddress
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress $MidocoCrmAddress = null;
    /**
     * The MidocoCrmPerson
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCrmPerson
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmPerson|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmPerson $MidocoCrmPerson = null;
    /**
     * The MidocoCrmCompany
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCrmCompany
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmCompany|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCompany $MidocoCrmCompany = null;
    /**
     * The numTravels
     * @var int|null
     */
    protected ?int $numTravels = null;
    /**
     * The travelAmount
     * @var float|null
     */
    protected ?float $travelAmount = null;
    /**
     * The firstTravelDate
     * @var string|null
     */
    protected ?string $firstTravelDate = null;
    /**
     * The lastTravelDate
     * @var string|null
     */
    protected ?string $lastTravelDate = null;
    /**
     * The unpaidAmount
     * @var float|null
     */
    protected ?float $unpaidAmount = null;
    /**
     * The existCrmDocuments
     * @var bool|null
     */
    protected ?bool $existCrmDocuments = null;
    /**
     * The existCrmAddress
     * @var bool|null
     */
    protected ?bool $existCrmAddress = null;
    /**
     * The existContactEntries
     * @var bool|null
     */
    protected ?bool $existContactEntries = null;
    /**
     * The existCrmNotices
     * @var bool|null
     */
    protected ?bool $existCrmNotices = null;
    /**
     * The existCustomerLinks
     * @var bool|null
     */
    protected ?bool $existCustomerLinks = null;
    /**
     * Constructor method for CrmCustomerDTO
     * @uses CrmCustomerDTO::setMidocoCrmAddress()
     * @uses CrmCustomerDTO::setMidocoCrmPerson()
     * @uses CrmCustomerDTO::setMidocoCrmCompany()
     * @uses CrmCustomerDTO::setNumTravels()
     * @uses CrmCustomerDTO::setTravelAmount()
     * @uses CrmCustomerDTO::setFirstTravelDate()
     * @uses CrmCustomerDTO::setLastTravelDate()
     * @uses CrmCustomerDTO::setUnpaidAmount()
     * @uses CrmCustomerDTO::setExistCrmDocuments()
     * @uses CrmCustomerDTO::setExistCrmAddress()
     * @uses CrmCustomerDTO::setExistContactEntries()
     * @uses CrmCustomerDTO::setExistCrmNotices()
     * @uses CrmCustomerDTO::setExistCustomerLinks()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress $midocoCrmAddress
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmPerson $midocoCrmPerson
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCompany $midocoCrmCompany
     * @param int $numTravels
     * @param float $travelAmount
     * @param string $firstTravelDate
     * @param string $lastTravelDate
     * @param float $unpaidAmount
     * @param bool $existCrmDocuments
     * @param bool $existCrmAddress
     * @param bool $existContactEntries
     * @param bool $existCrmNotices
     * @param bool $existCustomerLinks
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress $midocoCrmAddress = null, ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmPerson $midocoCrmPerson = null, ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCompany $midocoCrmCompany = null, ?int $numTravels = null, ?float $travelAmount = null, ?string $firstTravelDate = null, ?string $lastTravelDate = null, ?float $unpaidAmount = null, ?bool $existCrmDocuments = null, ?bool $existCrmAddress = null, ?bool $existContactEntries = null, ?bool $existCrmNotices = null, ?bool $existCustomerLinks = null)
    {
        $this
            ->setMidocoCrmAddress($midocoCrmAddress)
            ->setMidocoCrmPerson($midocoCrmPerson)
            ->setMidocoCrmCompany($midocoCrmCompany)
            ->setNumTravels($numTravels)
            ->setTravelAmount($travelAmount)
            ->setFirstTravelDate($firstTravelDate)
            ->setLastTravelDate($lastTravelDate)
            ->setUnpaidAmount($unpaidAmount)
            ->setExistCrmDocuments($existCrmDocuments)
            ->setExistCrmAddress($existCrmAddress)
            ->setExistContactEntries($existContactEntries)
            ->setExistCrmNotices($existCrmNotices)
            ->setExistCustomerLinks($existCustomerLinks);
    }
    /**
     * Get MidocoCrmAddress value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress|null
     */
    public function getMidocoCrmAddress(): ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress
    {
        return $this->MidocoCrmAddress;
    }
    /**
     * Set MidocoCrmAddress value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress $midocoCrmAddress
     * @return \Pggns\MidocoApi\Crm\StructType\CrmCustomerDTO
     */
    public function setMidocoCrmAddress(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress $midocoCrmAddress = null): self
    {
        $this->MidocoCrmAddress = $midocoCrmAddress;
        
        return $this;
    }
    /**
     * Get MidocoCrmPerson value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmPerson|null
     */
    public function getMidocoCrmPerson(): ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmPerson
    {
        return $this->MidocoCrmPerson;
    }
    /**
     * Set MidocoCrmPerson value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmPerson $midocoCrmPerson
     * @return \Pggns\MidocoApi\Crm\StructType\CrmCustomerDTO
     */
    public function setMidocoCrmPerson(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmPerson $midocoCrmPerson = null): self
    {
        $this->MidocoCrmPerson = $midocoCrmPerson;
        
        return $this;
    }
    /**
     * Get MidocoCrmCompany value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmCompany|null
     */
    public function getMidocoCrmCompany(): ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCompany
    {
        return $this->MidocoCrmCompany;
    }
    /**
     * Set MidocoCrmCompany value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCompany $midocoCrmCompany
     * @return \Pggns\MidocoApi\Crm\StructType\CrmCustomerDTO
     */
    public function setMidocoCrmCompany(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCompany $midocoCrmCompany = null): self
    {
        $this->MidocoCrmCompany = $midocoCrmCompany;
        
        return $this;
    }
    /**
     * Get numTravels value
     * @return int|null
     */
    public function getNumTravels(): ?int
    {
        return $this->numTravels;
    }
    /**
     * Set numTravels value
     * @param int $numTravels
     * @return \Pggns\MidocoApi\Crm\StructType\CrmCustomerDTO
     */
    public function setNumTravels(?int $numTravels = null): self
    {
        // validation for constraint: int
        if (!is_null($numTravels) && !(is_int($numTravels) || ctype_digit($numTravels))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numTravels, true), gettype($numTravels)), __LINE__);
        }
        $this->numTravels = $numTravels;
        
        return $this;
    }
    /**
     * Get travelAmount value
     * @return float|null
     */
    public function getTravelAmount(): ?float
    {
        return $this->travelAmount;
    }
    /**
     * Set travelAmount value
     * @param float $travelAmount
     * @return \Pggns\MidocoApi\Crm\StructType\CrmCustomerDTO
     */
    public function setTravelAmount(?float $travelAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($travelAmount) && !(is_float($travelAmount) || is_numeric($travelAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($travelAmount, true), gettype($travelAmount)), __LINE__);
        }
        $this->travelAmount = $travelAmount;
        
        return $this;
    }
    /**
     * Get firstTravelDate value
     * @return string|null
     */
    public function getFirstTravelDate(): ?string
    {
        return $this->firstTravelDate;
    }
    /**
     * Set firstTravelDate value
     * @param string $firstTravelDate
     * @return \Pggns\MidocoApi\Crm\StructType\CrmCustomerDTO
     */
    public function setFirstTravelDate(?string $firstTravelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($firstTravelDate) && !is_string($firstTravelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstTravelDate, true), gettype($firstTravelDate)), __LINE__);
        }
        $this->firstTravelDate = $firstTravelDate;
        
        return $this;
    }
    /**
     * Get lastTravelDate value
     * @return string|null
     */
    public function getLastTravelDate(): ?string
    {
        return $this->lastTravelDate;
    }
    /**
     * Set lastTravelDate value
     * @param string $lastTravelDate
     * @return \Pggns\MidocoApi\Crm\StructType\CrmCustomerDTO
     */
    public function setLastTravelDate(?string $lastTravelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lastTravelDate) && !is_string($lastTravelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastTravelDate, true), gettype($lastTravelDate)), __LINE__);
        }
        $this->lastTravelDate = $lastTravelDate;
        
        return $this;
    }
    /**
     * Get unpaidAmount value
     * @return float|null
     */
    public function getUnpaidAmount(): ?float
    {
        return $this->unpaidAmount;
    }
    /**
     * Set unpaidAmount value
     * @param float $unpaidAmount
     * @return \Pggns\MidocoApi\Crm\StructType\CrmCustomerDTO
     */
    public function setUnpaidAmount(?float $unpaidAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($unpaidAmount) && !(is_float($unpaidAmount) || is_numeric($unpaidAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($unpaidAmount, true), gettype($unpaidAmount)), __LINE__);
        }
        $this->unpaidAmount = $unpaidAmount;
        
        return $this;
    }
    /**
     * Get existCrmDocuments value
     * @return bool|null
     */
    public function getExistCrmDocuments(): ?bool
    {
        return $this->existCrmDocuments;
    }
    /**
     * Set existCrmDocuments value
     * @param bool $existCrmDocuments
     * @return \Pggns\MidocoApi\Crm\StructType\CrmCustomerDTO
     */
    public function setExistCrmDocuments(?bool $existCrmDocuments = null): self
    {
        // validation for constraint: boolean
        if (!is_null($existCrmDocuments) && !is_bool($existCrmDocuments)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($existCrmDocuments, true), gettype($existCrmDocuments)), __LINE__);
        }
        $this->existCrmDocuments = $existCrmDocuments;
        
        return $this;
    }
    /**
     * Get existCrmAddress value
     * @return bool|null
     */
    public function getExistCrmAddress(): ?bool
    {
        return $this->existCrmAddress;
    }
    /**
     * Set existCrmAddress value
     * @param bool $existCrmAddress
     * @return \Pggns\MidocoApi\Crm\StructType\CrmCustomerDTO
     */
    public function setExistCrmAddress(?bool $existCrmAddress = null): self
    {
        // validation for constraint: boolean
        if (!is_null($existCrmAddress) && !is_bool($existCrmAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($existCrmAddress, true), gettype($existCrmAddress)), __LINE__);
        }
        $this->existCrmAddress = $existCrmAddress;
        
        return $this;
    }
    /**
     * Get existContactEntries value
     * @return bool|null
     */
    public function getExistContactEntries(): ?bool
    {
        return $this->existContactEntries;
    }
    /**
     * Set existContactEntries value
     * @param bool $existContactEntries
     * @return \Pggns\MidocoApi\Crm\StructType\CrmCustomerDTO
     */
    public function setExistContactEntries(?bool $existContactEntries = null): self
    {
        // validation for constraint: boolean
        if (!is_null($existContactEntries) && !is_bool($existContactEntries)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($existContactEntries, true), gettype($existContactEntries)), __LINE__);
        }
        $this->existContactEntries = $existContactEntries;
        
        return $this;
    }
    /**
     * Get existCrmNotices value
     * @return bool|null
     */
    public function getExistCrmNotices(): ?bool
    {
        return $this->existCrmNotices;
    }
    /**
     * Set existCrmNotices value
     * @param bool $existCrmNotices
     * @return \Pggns\MidocoApi\Crm\StructType\CrmCustomerDTO
     */
    public function setExistCrmNotices(?bool $existCrmNotices = null): self
    {
        // validation for constraint: boolean
        if (!is_null($existCrmNotices) && !is_bool($existCrmNotices)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($existCrmNotices, true), gettype($existCrmNotices)), __LINE__);
        }
        $this->existCrmNotices = $existCrmNotices;
        
        return $this;
    }
    /**
     * Get existCustomerLinks value
     * @return bool|null
     */
    public function getExistCustomerLinks(): ?bool
    {
        return $this->existCustomerLinks;
    }
    /**
     * Set existCustomerLinks value
     * @param bool $existCustomerLinks
     * @return \Pggns\MidocoApi\Crm\StructType\CrmCustomerDTO
     */
    public function setExistCustomerLinks(?bool $existCustomerLinks = null): self
    {
        // validation for constraint: boolean
        if (!is_null($existCustomerLinks) && !is_bool($existCustomerLinks)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($existCustomerLinks, true), gettype($existCustomerLinks)), __LINE__);
        }
        $this->existCustomerLinks = $existCustomerLinks;
        
        return $this;
    }
}
