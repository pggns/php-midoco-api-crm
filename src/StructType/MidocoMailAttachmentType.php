<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoMailAttachmentType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoMailAttachmentType extends AbstractStructBase
{
    /**
     * The Data
     * @var string|null
     */
    protected ?string $Data = null;
    /**
     * The Encoding
     * Meta information extracted from the WSDL
     * - default: UTF-8
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Encoding = null;
    /**
     * The FileName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FileName = null;
    /**
     * The contentType
     * @var string|null
     */
    protected ?string $contentType = null;
    /**
     * The contentId
     * @var string|null
     */
    protected ?string $contentId = null;
    /**
     * The isExtraAttachment
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isExtraAttachment = null;
    /**
     * The isManuallyAttached
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isManuallyAttached = null;
    /**
     * Constructor method for MidocoMailAttachmentType
     * @uses MidocoMailAttachmentType::setData()
     * @uses MidocoMailAttachmentType::setEncoding()
     * @uses MidocoMailAttachmentType::setFileName()
     * @uses MidocoMailAttachmentType::setContentType()
     * @uses MidocoMailAttachmentType::setContentId()
     * @uses MidocoMailAttachmentType::setIsExtraAttachment()
     * @uses MidocoMailAttachmentType::setIsManuallyAttached()
     * @param string $data
     * @param string $encoding
     * @param string $fileName
     * @param string $contentType
     * @param string $contentId
     * @param bool $isExtraAttachment
     * @param bool $isManuallyAttached
     */
    public function __construct(?string $data = null, ?string $encoding = 'UTF-8', ?string $fileName = null, ?string $contentType = null, ?string $contentId = null, ?bool $isExtraAttachment = false, ?bool $isManuallyAttached = false)
    {
        $this
            ->setData($data)
            ->setEncoding($encoding)
            ->setFileName($fileName)
            ->setContentType($contentType)
            ->setContentId($contentId)
            ->setIsExtraAttachment($isExtraAttachment)
            ->setIsManuallyAttached($isManuallyAttached);
    }
    /**
     * Get Data value
     * @return string|null
     */
    public function getData(): ?string
    {
        return $this->Data;
    }
    /**
     * Set Data value
     * @param string $data
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMailAttachmentType
     */
    public function setData(?string $data = null): self
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($data, true), gettype($data)), __LINE__);
        }
        $this->Data = $data;
        
        return $this;
    }
    /**
     * Get Encoding value
     * @return string|null
     */
    public function getEncoding(): ?string
    {
        return $this->Encoding;
    }
    /**
     * Set Encoding value
     * @param string $encoding
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMailAttachmentType
     */
    public function setEncoding(?string $encoding = 'UTF-8'): self
    {
        // validation for constraint: string
        if (!is_null($encoding) && !is_string($encoding)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($encoding, true), gettype($encoding)), __LINE__);
        }
        $this->Encoding = $encoding;
        
        return $this;
    }
    /**
     * Get FileName value
     * @return string|null
     */
    public function getFileName(): ?string
    {
        return $this->FileName;
    }
    /**
     * Set FileName value
     * @param string $fileName
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMailAttachmentType
     */
    public function setFileName(?string $fileName = null): self
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileName, true), gettype($fileName)), __LINE__);
        }
        $this->FileName = $fileName;
        
        return $this;
    }
    /**
     * Get contentType value
     * @return string|null
     */
    public function getContentType(): ?string
    {
        return $this->contentType;
    }
    /**
     * Set contentType value
     * @param string $contentType
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMailAttachmentType
     */
    public function setContentType(?string $contentType = null): self
    {
        // validation for constraint: string
        if (!is_null($contentType) && !is_string($contentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contentType, true), gettype($contentType)), __LINE__);
        }
        $this->contentType = $contentType;
        
        return $this;
    }
    /**
     * Get contentId value
     * @return string|null
     */
    public function getContentId(): ?string
    {
        return $this->contentId;
    }
    /**
     * Set contentId value
     * @param string $contentId
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMailAttachmentType
     */
    public function setContentId(?string $contentId = null): self
    {
        // validation for constraint: string
        if (!is_null($contentId) && !is_string($contentId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contentId, true), gettype($contentId)), __LINE__);
        }
        $this->contentId = $contentId;
        
        return $this;
    }
    /**
     * Get isExtraAttachment value
     * @return bool|null
     */
    public function getIsExtraAttachment(): ?bool
    {
        return $this->isExtraAttachment;
    }
    /**
     * Set isExtraAttachment value
     * @param bool $isExtraAttachment
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMailAttachmentType
     */
    public function setIsExtraAttachment(?bool $isExtraAttachment = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isExtraAttachment) && !is_bool($isExtraAttachment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isExtraAttachment, true), gettype($isExtraAttachment)), __LINE__);
        }
        $this->isExtraAttachment = $isExtraAttachment;
        
        return $this;
    }
    /**
     * Get isManuallyAttached value
     * @return bool|null
     */
    public function getIsManuallyAttached(): ?bool
    {
        return $this->isManuallyAttached;
    }
    /**
     * Set isManuallyAttached value
     * @param bool $isManuallyAttached
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMailAttachmentType
     */
    public function setIsManuallyAttached(?bool $isManuallyAttached = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isManuallyAttached) && !is_bool($isManuallyAttached)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isManuallyAttached, true), gettype($isManuallyAttached)), __LINE__);
        }
        $this->isManuallyAttached = $isManuallyAttached;
        
        return $this;
    }
}
