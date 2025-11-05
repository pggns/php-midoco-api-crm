<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GeneratePaymentTokenRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GeneratePaymentTokenRequest extends AbstractStructBase
{
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The totalAmount
     * @var float|null
     */
    protected ?float $totalAmount = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The ccFeeAmount
     * @var float|null
     */
    protected ?float $ccFeeAmount = null;
    /**
     * The email
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The passengerScope
     * @var string|null
     */
    protected ?string $passengerScope = null;
    /**
     * Constructor method for GeneratePaymentTokenRequest
     * @uses GeneratePaymentTokenRequest::setBookingId()
     * @uses GeneratePaymentTokenRequest::setTotalAmount()
     * @uses GeneratePaymentTokenRequest::setCurrency()
     * @uses GeneratePaymentTokenRequest::setCcFeeAmount()
     * @uses GeneratePaymentTokenRequest::setEmail()
     * @uses GeneratePaymentTokenRequest::setPassengerScope()
     * @param string $bookingId
     * @param float $totalAmount
     * @param string $currency
     * @param float $ccFeeAmount
     * @param string $email
     * @param string $passengerScope
     */
    public function __construct(?string $bookingId = null, ?float $totalAmount = null, ?string $currency = null, ?float $ccFeeAmount = null, ?string $email = null, ?string $passengerScope = null)
    {
        $this
            ->setBookingId($bookingId)
            ->setTotalAmount($totalAmount)
            ->setCurrency($currency)
            ->setCcFeeAmount($ccFeeAmount)
            ->setEmail($email)
            ->setPassengerScope($passengerScope);
    }
    /**
     * Get bookingId value
     * @return string|null
     */
    public function getBookingId(): ?string
    {
        return $this->bookingId;
    }
    /**
     * Set bookingId value
     * @param string $bookingId
     * @return \Pggns\MidocoApi\Crm\StructType\GeneratePaymentTokenRequest
     */
    public function setBookingId(?string $bookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingId) && !is_string($bookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingId, true), gettype($bookingId)), __LINE__);
        }
        $this->bookingId = $bookingId;
        
        return $this;
    }
    /**
     * Get totalAmount value
     * @return float|null
     */
    public function getTotalAmount(): ?float
    {
        return $this->totalAmount;
    }
    /**
     * Set totalAmount value
     * @param float $totalAmount
     * @return \Pggns\MidocoApi\Crm\StructType\GeneratePaymentTokenRequest
     */
    public function setTotalAmount(?float $totalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalAmount) && !(is_float($totalAmount) || is_numeric($totalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalAmount, true), gettype($totalAmount)), __LINE__);
        }
        $this->totalAmount = $totalAmount;
        
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Pggns\MidocoApi\Crm\StructType\GeneratePaymentTokenRequest
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
    /**
     * Get ccFeeAmount value
     * @return float|null
     */
    public function getCcFeeAmount(): ?float
    {
        return $this->ccFeeAmount;
    }
    /**
     * Set ccFeeAmount value
     * @param float $ccFeeAmount
     * @return \Pggns\MidocoApi\Crm\StructType\GeneratePaymentTokenRequest
     */
    public function setCcFeeAmount(?float $ccFeeAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($ccFeeAmount) && !(is_float($ccFeeAmount) || is_numeric($ccFeeAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ccFeeAmount, true), gettype($ccFeeAmount)), __LINE__);
        }
        $this->ccFeeAmount = $ccFeeAmount;
        
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Pggns\MidocoApi\Crm\StructType\GeneratePaymentTokenRequest
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        
        return $this;
    }
    /**
     * Get passengerScope value
     * @return string|null
     */
    public function getPassengerScope(): ?string
    {
        return $this->passengerScope;
    }
    /**
     * Set passengerScope value
     * @param string $passengerScope
     * @return \Pggns\MidocoApi\Crm\StructType\GeneratePaymentTokenRequest
     */
    public function setPassengerScope(?string $passengerScope = null): self
    {
        // validation for constraint: string
        if (!is_null($passengerScope) && !is_string($passengerScope)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passengerScope, true), gettype($passengerScope)), __LINE__);
        }
        $this->passengerScope = $passengerScope;
        
        return $this;
    }
}
