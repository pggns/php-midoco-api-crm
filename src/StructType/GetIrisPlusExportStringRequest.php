<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIrisPlusExportStringRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetIrisPlusExportStringRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmCustomer
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCustomer
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $MidocoCrmCustomer = null;
    /**
     * The MidocoSelectedCrmPersonTraveller
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSelectedCrmPersonTraveller
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoSelectedCrmPersonTraveller[]
     */
    protected ?array $MidocoSelectedCrmPersonTraveller = null;
    /**
     * The isNewConnected
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isNewConnected = null;
    /**
     * The isExportCustomer
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isExportCustomer = null;
    /**
     * The exportBirthday
     * @var bool|null
     */
    protected ?bool $exportBirthday = null;
    /**
     * The exportAge
     * @var bool|null
     */
    protected ?bool $exportAge = null;
    /**
     * Constructor method for GetIrisPlusExportStringRequest
     * @uses GetIrisPlusExportStringRequest::setMidocoCrmCustomer()
     * @uses GetIrisPlusExportStringRequest::setMidocoSelectedCrmPersonTraveller()
     * @uses GetIrisPlusExportStringRequest::setIsNewConnected()
     * @uses GetIrisPlusExportStringRequest::setIsExportCustomer()
     * @uses GetIrisPlusExportStringRequest::setExportBirthday()
     * @uses GetIrisPlusExportStringRequest::setExportAge()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoSelectedCrmPersonTraveller[] $midocoSelectedCrmPersonTraveller
     * @param bool $isNewConnected
     * @param bool $isExportCustomer
     * @param bool $exportBirthday
     * @param bool $exportAge
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer = null, ?array $midocoSelectedCrmPersonTraveller = null, ?bool $isNewConnected = false, ?bool $isExportCustomer = false, ?bool $exportBirthday = null, ?bool $exportAge = null)
    {
        $this
            ->setMidocoCrmCustomer($midocoCrmCustomer)
            ->setMidocoSelectedCrmPersonTraveller($midocoSelectedCrmPersonTraveller)
            ->setIsNewConnected($isNewConnected)
            ->setIsExportCustomer($isExportCustomer)
            ->setExportBirthday($exportBirthday)
            ->setExportAge($exportAge);
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
     * @return \Pggns\MidocoApi\Crm\StructType\GetIrisPlusExportStringRequest
     */
    public function setMidocoCrmCustomer(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer = null): self
    {
        $this->MidocoCrmCustomer = $midocoCrmCustomer;
        
        return $this;
    }
    /**
     * Get MidocoSelectedCrmPersonTraveller value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoSelectedCrmPersonTraveller[]
     */
    public function getMidocoSelectedCrmPersonTraveller(): ?array
    {
        return $this->MidocoSelectedCrmPersonTraveller;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSelectedCrmPersonTraveller method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSelectedCrmPersonTraveller method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSelectedCrmPersonTravellerForArrayConstraintFromSetMidocoSelectedCrmPersonTraveller(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getIrisPlusExportStringRequestMidocoSelectedCrmPersonTravellerItem) {
            // validation for constraint: itemType
            if (!$getIrisPlusExportStringRequestMidocoSelectedCrmPersonTravellerItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoSelectedCrmPersonTraveller) {
                $invalidValues[] = is_object($getIrisPlusExportStringRequestMidocoSelectedCrmPersonTravellerItem) ? get_class($getIrisPlusExportStringRequestMidocoSelectedCrmPersonTravellerItem) : sprintf('%s(%s)', gettype($getIrisPlusExportStringRequestMidocoSelectedCrmPersonTravellerItem), var_export($getIrisPlusExportStringRequestMidocoSelectedCrmPersonTravellerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSelectedCrmPersonTraveller property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoSelectedCrmPersonTraveller, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSelectedCrmPersonTraveller value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoSelectedCrmPersonTraveller[] $midocoSelectedCrmPersonTraveller
     * @return \Pggns\MidocoApi\Crm\StructType\GetIrisPlusExportStringRequest
     */
    public function setMidocoSelectedCrmPersonTraveller(?array $midocoSelectedCrmPersonTraveller = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSelectedCrmPersonTravellerArrayErrorMessage = self::validateMidocoSelectedCrmPersonTravellerForArrayConstraintFromSetMidocoSelectedCrmPersonTraveller($midocoSelectedCrmPersonTraveller))) {
            throw new InvalidArgumentException($midocoSelectedCrmPersonTravellerArrayErrorMessage, __LINE__);
        }
        $this->MidocoSelectedCrmPersonTraveller = $midocoSelectedCrmPersonTraveller;
        
        return $this;
    }
    /**
     * Add item to MidocoSelectedCrmPersonTraveller value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoSelectedCrmPersonTraveller $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetIrisPlusExportStringRequest
     */
    public function addToMidocoSelectedCrmPersonTraveller(\Pggns\MidocoApi\Crm\StructType\MidocoSelectedCrmPersonTraveller $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoSelectedCrmPersonTraveller) {
            throw new InvalidArgumentException(sprintf('The MidocoSelectedCrmPersonTraveller property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoSelectedCrmPersonTraveller, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSelectedCrmPersonTraveller[] = $item;
        
        return $this;
    }
    /**
     * Get isNewConnected value
     * @return bool|null
     */
    public function getIsNewConnected(): ?bool
    {
        return $this->isNewConnected;
    }
    /**
     * Set isNewConnected value
     * @param bool $isNewConnected
     * @return \Pggns\MidocoApi\Crm\StructType\GetIrisPlusExportStringRequest
     */
    public function setIsNewConnected(?bool $isNewConnected = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isNewConnected) && !is_bool($isNewConnected)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isNewConnected, true), gettype($isNewConnected)), __LINE__);
        }
        $this->isNewConnected = $isNewConnected;
        
        return $this;
    }
    /**
     * Get isExportCustomer value
     * @return bool|null
     */
    public function getIsExportCustomer(): ?bool
    {
        return $this->isExportCustomer;
    }
    /**
     * Set isExportCustomer value
     * @param bool $isExportCustomer
     * @return \Pggns\MidocoApi\Crm\StructType\GetIrisPlusExportStringRequest
     */
    public function setIsExportCustomer(?bool $isExportCustomer = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isExportCustomer) && !is_bool($isExportCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isExportCustomer, true), gettype($isExportCustomer)), __LINE__);
        }
        $this->isExportCustomer = $isExportCustomer;
        
        return $this;
    }
    /**
     * Get exportBirthday value
     * @return bool|null
     */
    public function getExportBirthday(): ?bool
    {
        return $this->exportBirthday;
    }
    /**
     * Set exportBirthday value
     * @param bool $exportBirthday
     * @return \Pggns\MidocoApi\Crm\StructType\GetIrisPlusExportStringRequest
     */
    public function setExportBirthday(?bool $exportBirthday = null): self
    {
        // validation for constraint: boolean
        if (!is_null($exportBirthday) && !is_bool($exportBirthday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exportBirthday, true), gettype($exportBirthday)), __LINE__);
        }
        $this->exportBirthday = $exportBirthday;
        
        return $this;
    }
    /**
     * Get exportAge value
     * @return bool|null
     */
    public function getExportAge(): ?bool
    {
        return $this->exportAge;
    }
    /**
     * Set exportAge value
     * @param bool $exportAge
     * @return \Pggns\MidocoApi\Crm\StructType\GetIrisPlusExportStringRequest
     */
    public function setExportAge(?bool $exportAge = null): self
    {
        // validation for constraint: boolean
        if (!is_null($exportAge) && !is_bool($exportAge)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exportAge, true), gettype($exportAge)), __LINE__);
        }
        $this->exportAge = $exportAge;
        
        return $this;
    }
}
