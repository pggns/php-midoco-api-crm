<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoMailMessageType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoMailMessageType extends AbstractStructBase
{
    /**
     * The To
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $To = null;
    /**
     * The From
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $From = null;
    /**
     * The Cc
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Cc = null;
    /**
     * The Bcc
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Bcc = null;
    /**
     * The Subject
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Subject = null;
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Text = null;
    /**
     * The ReplyTo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ReplyTo = null;
    /**
     * The HtmlContent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $HtmlContent = null;
    /**
     * The MidocoMailAttachment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMailAttachment
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoMailAttachmentType[]
     */
    protected ?array $MidocoMailAttachment = null;
    /**
     * The MidocoMailHeader
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMailHeader
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoMailHeaderType[]
     */
    protected ?array $MidocoMailHeader = null;
    /**
     * The externDocumentId
     * @var int|null
     */
    protected ?int $externDocumentId = null;
    /**
     * The dontMail
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $dontMail = null;
    /**
     * The mailRelay
     * @var string|null
     */
    protected ?string $mailRelay = null;
    /**
     * The mailQueueId
     * @var int|null
     */
    protected ?int $mailQueueId = null;
    /**
     * The output
     * @var string|null
     */
    protected ?string $output = null;
    /**
     * The ignoreOrgunitMailSignature
     * Meta information extracted from the WSDL
     * - documentation: to ignore mail signature text in system unit email signature
     * - default: false
     * @var bool|null
     */
    protected ?bool $ignoreOrgunitMailSignature = null;
    /**
     * Constructor method for MidocoMailMessageType
     * @uses MidocoMailMessageType::setTo()
     * @uses MidocoMailMessageType::setFrom()
     * @uses MidocoMailMessageType::setCc()
     * @uses MidocoMailMessageType::setBcc()
     * @uses MidocoMailMessageType::setSubject()
     * @uses MidocoMailMessageType::setText()
     * @uses MidocoMailMessageType::setReplyTo()
     * @uses MidocoMailMessageType::setHtmlContent()
     * @uses MidocoMailMessageType::setMidocoMailAttachment()
     * @uses MidocoMailMessageType::setMidocoMailHeader()
     * @uses MidocoMailMessageType::setExternDocumentId()
     * @uses MidocoMailMessageType::setDontMail()
     * @uses MidocoMailMessageType::setMailRelay()
     * @uses MidocoMailMessageType::setMailQueueId()
     * @uses MidocoMailMessageType::setOutput()
     * @uses MidocoMailMessageType::setIgnoreOrgunitMailSignature()
     * @param string[] $to
     * @param string $from
     * @param string[] $cc
     * @param string[] $bcc
     * @param string $subject
     * @param string $text
     * @param string $replyTo
     * @param string $htmlContent
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoMailAttachmentType[] $midocoMailAttachment
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoMailHeaderType[] $midocoMailHeader
     * @param int $externDocumentId
     * @param bool $dontMail
     * @param string $mailRelay
     * @param int $mailQueueId
     * @param string $output
     * @param bool $ignoreOrgunitMailSignature
     */
    public function __construct(?array $to = null, ?string $from = null, ?array $cc = null, ?array $bcc = null, ?string $subject = null, ?string $text = null, ?string $replyTo = null, ?string $htmlContent = null, ?array $midocoMailAttachment = null, ?array $midocoMailHeader = null, ?int $externDocumentId = null, ?bool $dontMail = false, ?string $mailRelay = null, ?int $mailQueueId = null, ?string $output = null, ?bool $ignoreOrgunitMailSignature = false)
    {
        $this
            ->setTo($to)
            ->setFrom($from)
            ->setCc($cc)
            ->setBcc($bcc)
            ->setSubject($subject)
            ->setText($text)
            ->setReplyTo($replyTo)
            ->setHtmlContent($htmlContent)
            ->setMidocoMailAttachment($midocoMailAttachment)
            ->setMidocoMailHeader($midocoMailHeader)
            ->setExternDocumentId($externDocumentId)
            ->setDontMail($dontMail)
            ->setMailRelay($mailRelay)
            ->setMailQueueId($mailQueueId)
            ->setOutput($output)
            ->setIgnoreOrgunitMailSignature($ignoreOrgunitMailSignature);
    }
    /**
     * Get To value
     * @return string[]
     */
    public function getTo(): ?array
    {
        return $this->To;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateToForArrayConstraintFromSetTo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoMailMessageTypeToItem) {
            // validation for constraint: itemType
            if (!is_string($midocoMailMessageTypeToItem)) {
                $invalidValues[] = is_object($midocoMailMessageTypeToItem) ? get_class($midocoMailMessageTypeToItem) : sprintf('%s(%s)', gettype($midocoMailMessageTypeToItem), var_export($midocoMailMessageTypeToItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The To property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set To value
     * @throws InvalidArgumentException
     * @param string[] $to
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMailMessageType
     */
    public function setTo(?array $to = null): self
    {
        // validation for constraint: array
        if ('' !== ($toArrayErrorMessage = self::validateToForArrayConstraintFromSetTo($to))) {
            throw new InvalidArgumentException($toArrayErrorMessage, __LINE__);
        }
        $this->To = $to;
        
        return $this;
    }
    /**
     * Add item to To value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMailMessageType
     */
    public function addToTo(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The To property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->To[] = $item;
        
        return $this;
    }
    /**
     * Get From value
     * @return string|null
     */
    public function getFrom(): ?string
    {
        return $this->From;
    }
    /**
     * Set From value
     * @param string $from
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMailMessageType
     */
    public function setFrom(?string $from = null): self
    {
        // validation for constraint: string
        if (!is_null($from) && !is_string($from)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($from, true), gettype($from)), __LINE__);
        }
        $this->From = $from;
        
        return $this;
    }
    /**
     * Get Cc value
     * @return string[]
     */
    public function getCc(): ?array
    {
        return $this->Cc;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCc method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCc method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCcForArrayConstraintFromSetCc(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoMailMessageTypeCcItem) {
            // validation for constraint: itemType
            if (!is_string($midocoMailMessageTypeCcItem)) {
                $invalidValues[] = is_object($midocoMailMessageTypeCcItem) ? get_class($midocoMailMessageTypeCcItem) : sprintf('%s(%s)', gettype($midocoMailMessageTypeCcItem), var_export($midocoMailMessageTypeCcItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Cc property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Cc value
     * @throws InvalidArgumentException
     * @param string[] $cc
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMailMessageType
     */
    public function setCc(?array $cc = null): self
    {
        // validation for constraint: array
        if ('' !== ($ccArrayErrorMessage = self::validateCcForArrayConstraintFromSetCc($cc))) {
            throw new InvalidArgumentException($ccArrayErrorMessage, __LINE__);
        }
        $this->Cc = $cc;
        
        return $this;
    }
    /**
     * Add item to Cc value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMailMessageType
     */
    public function addToCc(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Cc property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Cc[] = $item;
        
        return $this;
    }
    /**
     * Get Bcc value
     * @return string[]
     */
    public function getBcc(): ?array
    {
        return $this->Bcc;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBcc method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBcc method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBccForArrayConstraintFromSetBcc(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoMailMessageTypeBccItem) {
            // validation for constraint: itemType
            if (!is_string($midocoMailMessageTypeBccItem)) {
                $invalidValues[] = is_object($midocoMailMessageTypeBccItem) ? get_class($midocoMailMessageTypeBccItem) : sprintf('%s(%s)', gettype($midocoMailMessageTypeBccItem), var_export($midocoMailMessageTypeBccItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Bcc property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Bcc value
     * @throws InvalidArgumentException
     * @param string[] $bcc
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMailMessageType
     */
    public function setBcc(?array $bcc = null): self
    {
        // validation for constraint: array
        if ('' !== ($bccArrayErrorMessage = self::validateBccForArrayConstraintFromSetBcc($bcc))) {
            throw new InvalidArgumentException($bccArrayErrorMessage, __LINE__);
        }
        $this->Bcc = $bcc;
        
        return $this;
    }
    /**
     * Add item to Bcc value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMailMessageType
     */
    public function addToBcc(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Bcc property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Bcc[] = $item;
        
        return $this;
    }
    /**
     * Get Subject value
     * @return string|null
     */
    public function getSubject(): ?string
    {
        return $this->Subject;
    }
    /**
     * Set Subject value
     * @param string $subject
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMailMessageType
     */
    public function setSubject(?string $subject = null): self
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subject, true), gettype($subject)), __LINE__);
        }
        $this->Subject = $subject;
        
        return $this;
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMailMessageType
     */
    public function setText(?string $text = null): self
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->Text = $text;
        
        return $this;
    }
    /**
     * Get ReplyTo value
     * @return string|null
     */
    public function getReplyTo(): ?string
    {
        return $this->ReplyTo;
    }
    /**
     * Set ReplyTo value
     * @param string $replyTo
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMailMessageType
     */
    public function setReplyTo(?string $replyTo = null): self
    {
        // validation for constraint: string
        if (!is_null($replyTo) && !is_string($replyTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($replyTo, true), gettype($replyTo)), __LINE__);
        }
        $this->ReplyTo = $replyTo;
        
        return $this;
    }
    /**
     * Get HtmlContent value
     * @return string|null
     */
    public function getHtmlContent(): ?string
    {
        return $this->HtmlContent;
    }
    /**
     * Set HtmlContent value
     * @param string $htmlContent
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMailMessageType
     */
    public function setHtmlContent(?string $htmlContent = null): self
    {
        // validation for constraint: string
        if (!is_null($htmlContent) && !is_string($htmlContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($htmlContent, true), gettype($htmlContent)), __LINE__);
        }
        $this->HtmlContent = $htmlContent;
        
        return $this;
    }
    /**
     * Get MidocoMailAttachment value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMailAttachmentType[]
     */
    public function getMidocoMailAttachment(): ?array
    {
        return $this->MidocoMailAttachment;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMailAttachment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMailAttachment method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMailAttachmentForArrayConstraintFromSetMidocoMailAttachment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoMailMessageTypeMidocoMailAttachmentItem) {
            // validation for constraint: itemType
            if (!$midocoMailMessageTypeMidocoMailAttachmentItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoMailAttachmentType) {
                $invalidValues[] = is_object($midocoMailMessageTypeMidocoMailAttachmentItem) ? get_class($midocoMailMessageTypeMidocoMailAttachmentItem) : sprintf('%s(%s)', gettype($midocoMailMessageTypeMidocoMailAttachmentItem), var_export($midocoMailMessageTypeMidocoMailAttachmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMailAttachment property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoMailAttachmentType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMailAttachment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoMailAttachmentType[] $midocoMailAttachment
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMailMessageType
     */
    public function setMidocoMailAttachment(?array $midocoMailAttachment = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMailAttachmentArrayErrorMessage = self::validateMidocoMailAttachmentForArrayConstraintFromSetMidocoMailAttachment($midocoMailAttachment))) {
            throw new InvalidArgumentException($midocoMailAttachmentArrayErrorMessage, __LINE__);
        }
        $this->MidocoMailAttachment = $midocoMailAttachment;
        
        return $this;
    }
    /**
     * Add item to MidocoMailAttachment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoMailAttachmentType $item
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMailMessageType
     */
    public function addToMidocoMailAttachment(\Pggns\MidocoApi\Crm\StructType\MidocoMailAttachmentType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoMailAttachmentType) {
            throw new InvalidArgumentException(sprintf('The MidocoMailAttachment property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoMailAttachmentType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMailAttachment[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoMailHeader value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMailHeaderType[]
     */
    public function getMidocoMailHeader(): ?array
    {
        return $this->MidocoMailHeader;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMailHeader method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMailHeader method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMailHeaderForArrayConstraintFromSetMidocoMailHeader(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoMailMessageTypeMidocoMailHeaderItem) {
            // validation for constraint: itemType
            if (!$midocoMailMessageTypeMidocoMailHeaderItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoMailHeaderType) {
                $invalidValues[] = is_object($midocoMailMessageTypeMidocoMailHeaderItem) ? get_class($midocoMailMessageTypeMidocoMailHeaderItem) : sprintf('%s(%s)', gettype($midocoMailMessageTypeMidocoMailHeaderItem), var_export($midocoMailMessageTypeMidocoMailHeaderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMailHeader property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoMailHeaderType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMailHeader value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoMailHeaderType[] $midocoMailHeader
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMailMessageType
     */
    public function setMidocoMailHeader(?array $midocoMailHeader = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMailHeaderArrayErrorMessage = self::validateMidocoMailHeaderForArrayConstraintFromSetMidocoMailHeader($midocoMailHeader))) {
            throw new InvalidArgumentException($midocoMailHeaderArrayErrorMessage, __LINE__);
        }
        $this->MidocoMailHeader = $midocoMailHeader;
        
        return $this;
    }
    /**
     * Add item to MidocoMailHeader value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoMailHeaderType $item
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMailMessageType
     */
    public function addToMidocoMailHeader(\Pggns\MidocoApi\Crm\StructType\MidocoMailHeaderType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoMailHeaderType) {
            throw new InvalidArgumentException(sprintf('The MidocoMailHeader property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoMailHeaderType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMailHeader[] = $item;
        
        return $this;
    }
    /**
     * Get externDocumentId value
     * @return int|null
     */
    public function getExternDocumentId(): ?int
    {
        return $this->externDocumentId;
    }
    /**
     * Set externDocumentId value
     * @param int $externDocumentId
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMailMessageType
     */
    public function setExternDocumentId(?int $externDocumentId = null): self
    {
        // validation for constraint: int
        if (!is_null($externDocumentId) && !(is_int($externDocumentId) || ctype_digit($externDocumentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($externDocumentId, true), gettype($externDocumentId)), __LINE__);
        }
        $this->externDocumentId = $externDocumentId;
        
        return $this;
    }
    /**
     * Get dontMail value
     * @return bool|null
     */
    public function getDontMail(): ?bool
    {
        return $this->dontMail;
    }
    /**
     * Set dontMail value
     * @param bool $dontMail
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMailMessageType
     */
    public function setDontMail(?bool $dontMail = false): self
    {
        // validation for constraint: boolean
        if (!is_null($dontMail) && !is_bool($dontMail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dontMail, true), gettype($dontMail)), __LINE__);
        }
        $this->dontMail = $dontMail;
        
        return $this;
    }
    /**
     * Get mailRelay value
     * @return string|null
     */
    public function getMailRelay(): ?string
    {
        return $this->mailRelay;
    }
    /**
     * Set mailRelay value
     * @param string $mailRelay
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMailMessageType
     */
    public function setMailRelay(?string $mailRelay = null): self
    {
        // validation for constraint: string
        if (!is_null($mailRelay) && !is_string($mailRelay)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailRelay, true), gettype($mailRelay)), __LINE__);
        }
        $this->mailRelay = $mailRelay;
        
        return $this;
    }
    /**
     * Get mailQueueId value
     * @return int|null
     */
    public function getMailQueueId(): ?int
    {
        return $this->mailQueueId;
    }
    /**
     * Set mailQueueId value
     * @param int $mailQueueId
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMailMessageType
     */
    public function setMailQueueId(?int $mailQueueId = null): self
    {
        // validation for constraint: int
        if (!is_null($mailQueueId) && !(is_int($mailQueueId) || ctype_digit($mailQueueId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mailQueueId, true), gettype($mailQueueId)), __LINE__);
        }
        $this->mailQueueId = $mailQueueId;
        
        return $this;
    }
    /**
     * Get output value
     * @return string|null
     */
    public function getOutput(): ?string
    {
        return $this->output;
    }
    /**
     * Set output value
     * @param string $output
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMailMessageType
     */
    public function setOutput(?string $output = null): self
    {
        // validation for constraint: string
        if (!is_null($output) && !is_string($output)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($output, true), gettype($output)), __LINE__);
        }
        $this->output = $output;
        
        return $this;
    }
    /**
     * Get ignoreOrgunitMailSignature value
     * @return bool|null
     */
    public function getIgnoreOrgunitMailSignature(): ?bool
    {
        return $this->ignoreOrgunitMailSignature;
    }
    /**
     * Set ignoreOrgunitMailSignature value
     * @param bool $ignoreOrgunitMailSignature
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMailMessageType
     */
    public function setIgnoreOrgunitMailSignature(?bool $ignoreOrgunitMailSignature = false): self
    {
        // validation for constraint: boolean
        if (!is_null($ignoreOrgunitMailSignature) && !is_bool($ignoreOrgunitMailSignature)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ignoreOrgunitMailSignature, true), gettype($ignoreOrgunitMailSignature)), __LINE__);
        }
        $this->ignoreOrgunitMailSignature = $ignoreOrgunitMailSignature;
        
        return $this;
    }
}
