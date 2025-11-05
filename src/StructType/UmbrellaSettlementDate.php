<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UmbrellaSettlementDate StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UmbrellaSettlementDate extends AbstractStructBase
{
    /**
     * The Year
     * Meta information extracted from the WSDL
     * - base: xs:integer
     * - maxInclusive: 2199
     * - minInclusive: 2024
     * - use: required
     * @var int
     */
    protected int $Year;
    /**
     * The Month
     * Meta information extracted from the WSDL
     * - base: xs:integer
     * - maxInclusive: 12
     * - minInclusive: 1
     * - use: required
     * @var int
     */
    protected int $Month;
    /**
     * Constructor method for UmbrellaSettlementDate
     * @uses UmbrellaSettlementDate::setYear()
     * @uses UmbrellaSettlementDate::setMonth()
     * @param int $year
     * @param int $month
     */
    public function __construct(int $year, int $month)
    {
        $this
            ->setYear($year)
            ->setMonth($month);
    }
    /**
     * Get Year value
     * @return int
     */
    public function getYear(): int
    {
        return $this->Year;
    }
    /**
     * Set Year value
     * @param int $year
     * @return \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementDate
     */
    public function setYear(int $year): self
    {
        // validation for constraint: int
        if (!is_null($year) && !(is_int($year) || ctype_digit($year))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($year, true), gettype($year)), __LINE__);
        }
        // validation for constraint: maxInclusive(2199)
        if (!is_null($year) && $year > 2199) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 2199', var_export($year, true)), __LINE__);
        }
        // validation for constraint: minInclusive(2024)
        if (!is_null($year) && $year < 2024) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 2024', var_export($year, true)), __LINE__);
        }
        $this->Year = $year;
        
        return $this;
    }
    /**
     * Get Month value
     * @return int
     */
    public function getMonth(): int
    {
        return $this->Month;
    }
    /**
     * Set Month value
     * @param int $month
     * @return \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementDate
     */
    public function setMonth(int $month): self
    {
        // validation for constraint: int
        if (!is_null($month) && !(is_int($month) || ctype_digit($month))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($month, true), gettype($month)), __LINE__);
        }
        // validation for constraint: maxInclusive(12)
        if (!is_null($month) && $month > 12) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 12', var_export($month, true)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($month) && $month < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($month, true)), __LINE__);
        }
        $this->Month = $month;
        
        return $this;
    }
}
