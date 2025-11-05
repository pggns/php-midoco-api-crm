<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAmadeusExportStringRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAmadeusExportStringRequest extends AbstractStructBase
{
    /**
     * The expedientCode
     * @var string|null
     */
    protected ?string $expedientCode = null;
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
     * The MidocoCustomerTravel
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCustomerTravel
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCustomerTravelType[]
     */
    protected ?array $MidocoCustomerTravel = null;
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
     * The returnJson
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $returnJson = null;
    /**
     * Constructor method for GetAmadeusExportStringRequest
     * @uses GetAmadeusExportStringRequest::setExpedientCode()
     * @uses GetAmadeusExportStringRequest::setMidocoCrmCustomer()
     * @uses GetAmadeusExportStringRequest::setMidocoSelectedCrmPersonTraveller()
     * @uses GetAmadeusExportStringRequest::setMidocoCustomerTravel()
     * @uses GetAmadeusExportStringRequest::setExportBirthday()
     * @uses GetAmadeusExportStringRequest::setExportAge()
     * @uses GetAmadeusExportStringRequest::setReturnJson()
     * @param string $expedientCode
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoSelectedCrmPersonTraveller[] $midocoSelectedCrmPersonTraveller
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCustomerTravelType[] $midocoCustomerTravel
     * @param bool $exportBirthday
     * @param bool $exportAge
     * @param bool $returnJson
     */
    public function __construct(?string $expedientCode = null, ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer = null, ?array $midocoSelectedCrmPersonTraveller = null, ?array $midocoCustomerTravel = null, ?bool $exportBirthday = null, ?bool $exportAge = null, ?bool $returnJson = false)
    {
        $this
            ->setExpedientCode($expedientCode)
            ->setMidocoCrmCustomer($midocoCrmCustomer)
            ->setMidocoSelectedCrmPersonTraveller($midocoSelectedCrmPersonTraveller)
            ->setMidocoCustomerTravel($midocoCustomerTravel)
            ->setExportBirthday($exportBirthday)
            ->setExportAge($exportAge)
            ->setReturnJson($returnJson);
    }
    /**
     * Get expedientCode value
     * @return string|null
     */
    public function getExpedientCode(): ?string
    {
        return $this->expedientCode;
    }
    /**
     * Set expedientCode value
     * @param string $expedientCode
     * @return \Pggns\MidocoApi\Crm\StructType\GetAmadeusExportStringRequest
     */
    public function setExpedientCode(?string $expedientCode = null): self
    {
        // validation for constraint: string
        if (!is_null($expedientCode) && !is_string($expedientCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expedientCode, true), gettype($expedientCode)), __LINE__);
        }
        $this->expedientCode = $expedientCode;
        
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
     * @return \Pggns\MidocoApi\Crm\StructType\GetAmadeusExportStringRequest
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
        foreach ($values as $getAmadeusExportStringRequestMidocoSelectedCrmPersonTravellerItem) {
            // validation for constraint: itemType
            if (!$getAmadeusExportStringRequestMidocoSelectedCrmPersonTravellerItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoSelectedCrmPersonTraveller) {
                $invalidValues[] = is_object($getAmadeusExportStringRequestMidocoSelectedCrmPersonTravellerItem) ? get_class($getAmadeusExportStringRequestMidocoSelectedCrmPersonTravellerItem) : sprintf('%s(%s)', gettype($getAmadeusExportStringRequestMidocoSelectedCrmPersonTravellerItem), var_export($getAmadeusExportStringRequestMidocoSelectedCrmPersonTravellerItem, true));
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
     * @return \Pggns\MidocoApi\Crm\StructType\GetAmadeusExportStringRequest
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
     * @return \Pggns\MidocoApi\Crm\StructType\GetAmadeusExportStringRequest
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
     * Get MidocoCustomerTravel value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerTravelType[]
     */
    public function getMidocoCustomerTravel(): ?array
    {
        return $this->MidocoCustomerTravel;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCustomerTravel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerTravel method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerTravelForArrayConstraintFromSetMidocoCustomerTravel(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAmadeusExportStringRequestMidocoCustomerTravelItem) {
            // validation for constraint: itemType
            if (!$getAmadeusExportStringRequestMidocoCustomerTravelItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCustomerTravelType) {
                $invalidValues[] = is_object($getAmadeusExportStringRequestMidocoCustomerTravelItem) ? get_class($getAmadeusExportStringRequestMidocoCustomerTravelItem) : sprintf('%s(%s)', gettype($getAmadeusExportStringRequestMidocoCustomerTravelItem), var_export($getAmadeusExportStringRequestMidocoCustomerTravelItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerTravel property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCustomerTravelType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerTravel value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCustomerTravelType[] $midocoCustomerTravel
     * @return \Pggns\MidocoApi\Crm\StructType\GetAmadeusExportStringRequest
     */
    public function setMidocoCustomerTravel(?array $midocoCustomerTravel = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerTravelArrayErrorMessage = self::validateMidocoCustomerTravelForArrayConstraintFromSetMidocoCustomerTravel($midocoCustomerTravel))) {
            throw new InvalidArgumentException($midocoCustomerTravelArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerTravel = $midocoCustomerTravel;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerTravel value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCustomerTravelType $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetAmadeusExportStringRequest
     */
    public function addToMidocoCustomerTravel(\Pggns\MidocoApi\Crm\StructType\MidocoCustomerTravelType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCustomerTravelType) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerTravel property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCustomerTravelType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerTravel[] = $item;
        
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
     * @return \Pggns\MidocoApi\Crm\StructType\GetAmadeusExportStringRequest
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
     * @return \Pggns\MidocoApi\Crm\StructType\GetAmadeusExportStringRequest
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
    /**
     * Get returnJson value
     * @return bool|null
     */
    public function getReturnJson(): ?bool
    {
        return $this->returnJson;
    }
    /**
     * Set returnJson value
     * @param bool $returnJson
     * @return \Pggns\MidocoApi\Crm\StructType\GetAmadeusExportStringRequest
     */
    public function setReturnJson(?bool $returnJson = false): self
    {
        // validation for constraint: boolean
        if (!is_null($returnJson) && !is_bool($returnJson)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnJson, true), gettype($returnJson)), __LINE__);
        }
        $this->returnJson = $returnJson;
        
        return $this;
    }
}
