<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SynchronizeBexioUnitsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SynchronizeBexioUnitsResponse extends AbstractStructBase
{
    /**
     * The Created
     * @var int|null
     */
    protected ?int $Created = null;
    /**
     * The Modified
     * @var int|null
     */
    protected ?int $Modified = null;
    /**
     * The Deleted
     * @var int|null
     */
    protected ?int $Deleted = null;
    /**
     * Constructor method for SynchronizeBexioUnitsResponse
     * @uses SynchronizeBexioUnitsResponse::setCreated()
     * @uses SynchronizeBexioUnitsResponse::setModified()
     * @uses SynchronizeBexioUnitsResponse::setDeleted()
     * @param int $created
     * @param int $modified
     * @param int $deleted
     */
    public function __construct(?int $created = null, ?int $modified = null, ?int $deleted = null)
    {
        $this
            ->setCreated($created)
            ->setModified($modified)
            ->setDeleted($deleted);
    }
    /**
     * Get Created value
     * @return int|null
     */
    public function getCreated(): ?int
    {
        return $this->Created;
    }
    /**
     * Set Created value
     * @param int $created
     * @return \Pggns\MidocoApi\Crm\StructType\SynchronizeBexioUnitsResponse
     */
    public function setCreated(?int $created = null): self
    {
        // validation for constraint: int
        if (!is_null($created) && !(is_int($created) || ctype_digit($created))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($created, true), gettype($created)), __LINE__);
        }
        $this->Created = $created;
        
        return $this;
    }
    /**
     * Get Modified value
     * @return int|null
     */
    public function getModified(): ?int
    {
        return $this->Modified;
    }
    /**
     * Set Modified value
     * @param int $modified
     * @return \Pggns\MidocoApi\Crm\StructType\SynchronizeBexioUnitsResponse
     */
    public function setModified(?int $modified = null): self
    {
        // validation for constraint: int
        if (!is_null($modified) && !(is_int($modified) || ctype_digit($modified))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($modified, true), gettype($modified)), __LINE__);
        }
        $this->Modified = $modified;
        
        return $this;
    }
    /**
     * Get Deleted value
     * @return int|null
     */
    public function getDeleted(): ?int
    {
        return $this->Deleted;
    }
    /**
     * Set Deleted value
     * @param int $deleted
     * @return \Pggns\MidocoApi\Crm\StructType\SynchronizeBexioUnitsResponse
     */
    public function setDeleted(?int $deleted = null): self
    {
        // validation for constraint: int
        if (!is_null($deleted) && !(is_int($deleted) || ctype_digit($deleted))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($deleted, true), gettype($deleted)), __LINE__);
        }
        $this->Deleted = $deleted;
        
        return $this;
    }
}
