<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSubjectDescription StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoSubjectDescription extends AbstractStructBase
{
    /**
     * The travelDate
     * Meta information extracted from the WSDL
     * - default:
     * @var string|null
     */
    protected ?string $travelDate = null;
    /**
     * The customer
     * Meta information extracted from the WSDL
     * - default:
     * @var string|null
     */
    protected ?string $customer = null;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - default:
     * @var string|null
     */
    protected ?string $id = null;
    /**
     * The creationUser
     * Meta information extracted from the WSDL
     * - default:
     * @var string|null
     */
    protected ?string $creationUser = null;
    /**
     * Constructor method for MidocoSubjectDescription
     * @uses MidocoSubjectDescription::setTravelDate()
     * @uses MidocoSubjectDescription::setCustomer()
     * @uses MidocoSubjectDescription::setId()
     * @uses MidocoSubjectDescription::setCreationUser()
     * @param string $travelDate
     * @param string $customer
     * @param string $id
     * @param string $creationUser
     */
    public function __construct(?string $travelDate = '', ?string $customer = '', ?string $id = '', ?string $creationUser = '')
    {
        $this
            ->setTravelDate($travelDate)
            ->setCustomer($customer)
            ->setId($id)
            ->setCreationUser($creationUser);
    }
    /**
     * Get travelDate value
     * @return string|null
     */
    public function getTravelDate(): ?string
    {
        return $this->travelDate;
    }
    /**
     * Set travelDate value
     * @param string $travelDate
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoSubjectDescription
     */
    public function setTravelDate(?string $travelDate = ''): self
    {
        // validation for constraint: string
        if (!is_null($travelDate) && !is_string($travelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDate, true), gettype($travelDate)), __LINE__);
        }
        $this->travelDate = $travelDate;
        
        return $this;
    }
    /**
     * Get customer value
     * @return string|null
     */
    public function getCustomer(): ?string
    {
        return $this->customer;
    }
    /**
     * Set customer value
     * @param string $customer
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoSubjectDescription
     */
    public function setCustomer(?string $customer = ''): self
    {
        // validation for constraint: string
        if (!is_null($customer) && !is_string($customer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer, true), gettype($customer)), __LINE__);
        }
        $this->customer = $customer;
        
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoSubjectDescription
     */
    public function setId(?string $id = ''): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get creationUser value
     * @return string|null
     */
    public function getCreationUser(): ?string
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param string $creationUser
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoSubjectDescription
     */
    public function setCreationUser(?string $creationUser = ''): self
    {
        // validation for constraint: string
        if (!is_null($creationUser) && !is_string($creationUser)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
        return $this;
    }
}
