<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoImportCustomer StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoImportCustomer extends AbstractStructBase
{
    /**
     * The customerId
     * @var string|null
     */
    protected ?string $customerId = null;
    /**
     * The company
     * @var string|null
     */
    protected ?string $company = null;
    /**
     * The anrede
     * @var string|null
     */
    protected ?string $anrede = null;
    /**
     * The titel
     * @var string|null
     */
    protected ?string $titel = null;
    /**
     * The rufname
     * @var string|null
     */
    protected ?string $rufname = null;
    /**
     * The weitereVornamen
     * @var string|null
     */
    protected ?string $weitereVornamen = null;
    /**
     * The nachname
     * @var string|null
     */
    protected ?string $nachname = null;
    /**
     * The namenszusatz
     * @var string|null
     */
    protected ?string $namenszusatz = null;
    /**
     * The contactPerson
     * @var string|null
     */
    protected ?string $contactPerson = null;
    /**
     * The briefanrede
     * @var string|null
     */
    protected ?string $briefanrede = null;
    /**
     * The sortierfeld
     * @var string|null
     */
    protected ?string $sortierfeld = null;
    /**
     * The beruf
     * @var string|null
     */
    protected ?string $beruf = null;
    /**
     * The abteilung
     * @var string|null
     */
    protected ?string $abteilung = null;
    /**
     * The kostenstelle
     * @var string|null
     */
    protected ?string $kostenstelle = null;
    /**
     * The adresszeile1
     * @var string|null
     */
    protected ?string $adresszeile1 = null;
    /**
     * The adresszeile2
     * @var string|null
     */
    protected ?string $adresszeile2 = null;
    /**
     * The strasse
     * @var string|null
     */
    protected ?string $strasse = null;
    /**
     * The hausnr
     * @var string|null
     */
    protected ?string $hausnr = null;
    /**
     * The zusatz
     * @var string|null
     */
    protected ?string $zusatz = null;
    /**
     * The postfach
     * @var string|null
     */
    protected ?string $postfach = null;
    /**
     * The plz
     * @var string|null
     */
    protected ?string $plz = null;
    /**
     * The ort
     * @var string|null
     */
    protected ?string $ort = null;
    /**
     * The land
     * @var string|null
     */
    protected ?string $land = null;
    /**
     * The email
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The tel
     * @var string|null
     */
    protected ?string $tel = null;
    /**
     * The fax
     * @var string|null
     */
    protected ?string $fax = null;
    /**
     * The handyPrivate
     * @var string|null
     */
    protected ?string $handyPrivate = null;
    /**
     * The handBusiness
     * @var string|null
     */
    protected ?string $handBusiness = null;
    /**
     * The birthday
     * @var string|null
     */
    protected ?string $birthday = null;
    /**
     * The geburtsname
     * @var string|null
     */
    protected ?string $geburtsname = null;
    /**
     * The geschlecht
     * @var string|null
     */
    protected ?string $geschlecht = null;
    /**
     * The sprache
     * @var string|null
     */
    protected ?string $sprache = null;
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The chargesGroup
     * @var string|null
     */
    protected ?string $chargesGroup = null;
    /**
     * The creditLimit
     * @var string|null
     */
    protected ?string $creditLimit = null;
    /**
     * The concernId
     * @var string|null
     */
    protected ?string $concernId = null;
    /**
     * The invoiceSignature
     * @var string|null
     */
    protected ?string $invoiceSignature = null;
    /**
     * The vatId
     * @var string|null
     */
    protected ?string $vatId = null;
    /**
     * The vatLiability
     * @var string|null
     */
    protected ?string $vatLiability = null;
    /**
     * The handelsregister
     * @var string|null
     */
    protected ?string $handelsregister = null;
    /**
     * The passNo
     * @var string|null
     */
    protected ?string $passNo = null;
    /**
     * The passValid
     * @var string|null
     */
    protected ?string $passValid = null;
    /**
     * The passIssued
     * @var string|null
     */
    protected ?string $passIssued = null;
    /**
     * The personalNo
     * @var string|null
     */
    protected ?string $personalNo = null;
    /**
     * The mailingProhibited
     * @var bool|null
     */
    protected ?bool $mailingProhibited = null;
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The mediatorType
     * @var string|null
     */
    protected ?string $mediatorType = null;
    /**
     * The paymentDelay
     * @var string|null
     */
    protected ?string $paymentDelay = null;
    /**
     * The paymentConditionId
     * @var string|null
     */
    protected ?string $paymentConditionId = null;
    /**
     * The hasBtContract
     * @var bool|null
     */
    protected ?bool $hasBtContract = null;
    /**
     * Constructor method for MidocoImportCustomer
     * @uses MidocoImportCustomer::setCustomerId()
     * @uses MidocoImportCustomer::setCompany()
     * @uses MidocoImportCustomer::setAnrede()
     * @uses MidocoImportCustomer::setTitel()
     * @uses MidocoImportCustomer::setRufname()
     * @uses MidocoImportCustomer::setWeitereVornamen()
     * @uses MidocoImportCustomer::setNachname()
     * @uses MidocoImportCustomer::setNamenszusatz()
     * @uses MidocoImportCustomer::setContactPerson()
     * @uses MidocoImportCustomer::setBriefanrede()
     * @uses MidocoImportCustomer::setSortierfeld()
     * @uses MidocoImportCustomer::setBeruf()
     * @uses MidocoImportCustomer::setAbteilung()
     * @uses MidocoImportCustomer::setKostenstelle()
     * @uses MidocoImportCustomer::setAdresszeile1()
     * @uses MidocoImportCustomer::setAdresszeile2()
     * @uses MidocoImportCustomer::setStrasse()
     * @uses MidocoImportCustomer::setHausnr()
     * @uses MidocoImportCustomer::setZusatz()
     * @uses MidocoImportCustomer::setPostfach()
     * @uses MidocoImportCustomer::setPlz()
     * @uses MidocoImportCustomer::setOrt()
     * @uses MidocoImportCustomer::setLand()
     * @uses MidocoImportCustomer::setEmail()
     * @uses MidocoImportCustomer::setOrgUnit()
     * @uses MidocoImportCustomer::setTel()
     * @uses MidocoImportCustomer::setFax()
     * @uses MidocoImportCustomer::setHandyPrivate()
     * @uses MidocoImportCustomer::setHandBusiness()
     * @uses MidocoImportCustomer::setBirthday()
     * @uses MidocoImportCustomer::setGeburtsname()
     * @uses MidocoImportCustomer::setGeschlecht()
     * @uses MidocoImportCustomer::setSprache()
     * @uses MidocoImportCustomer::setDebitorNo()
     * @uses MidocoImportCustomer::setChargesGroup()
     * @uses MidocoImportCustomer::setCreditLimit()
     * @uses MidocoImportCustomer::setConcernId()
     * @uses MidocoImportCustomer::setInvoiceSignature()
     * @uses MidocoImportCustomer::setVatId()
     * @uses MidocoImportCustomer::setVatLiability()
     * @uses MidocoImportCustomer::setHandelsregister()
     * @uses MidocoImportCustomer::setPassNo()
     * @uses MidocoImportCustomer::setPassValid()
     * @uses MidocoImportCustomer::setPassIssued()
     * @uses MidocoImportCustomer::setPersonalNo()
     * @uses MidocoImportCustomer::setMailingProhibited()
     * @uses MidocoImportCustomer::setMediatorId()
     * @uses MidocoImportCustomer::setMediatorType()
     * @uses MidocoImportCustomer::setPaymentDelay()
     * @uses MidocoImportCustomer::setPaymentConditionId()
     * @uses MidocoImportCustomer::setHasBtContract()
     * @param string $customerId
     * @param string $company
     * @param string $anrede
     * @param string $titel
     * @param string $rufname
     * @param string $weitereVornamen
     * @param string $nachname
     * @param string $namenszusatz
     * @param string $contactPerson
     * @param string $briefanrede
     * @param string $sortierfeld
     * @param string $beruf
     * @param string $abteilung
     * @param string $kostenstelle
     * @param string $adresszeile1
     * @param string $adresszeile2
     * @param string $strasse
     * @param string $hausnr
     * @param string $zusatz
     * @param string $postfach
     * @param string $plz
     * @param string $ort
     * @param string $land
     * @param string $email
     * @param string $orgUnit
     * @param string $tel
     * @param string $fax
     * @param string $handyPrivate
     * @param string $handBusiness
     * @param string $birthday
     * @param string $geburtsname
     * @param string $geschlecht
     * @param string $sprache
     * @param string $debitorNo
     * @param string $chargesGroup
     * @param string $creditLimit
     * @param string $concernId
     * @param string $invoiceSignature
     * @param string $vatId
     * @param string $vatLiability
     * @param string $handelsregister
     * @param string $passNo
     * @param string $passValid
     * @param string $passIssued
     * @param string $personalNo
     * @param bool $mailingProhibited
     * @param string $mediatorId
     * @param string $mediatorType
     * @param string $paymentDelay
     * @param string $paymentConditionId
     * @param bool $hasBtContract
     */
    public function __construct(?string $customerId = null, ?string $company = null, ?string $anrede = null, ?string $titel = null, ?string $rufname = null, ?string $weitereVornamen = null, ?string $nachname = null, ?string $namenszusatz = null, ?string $contactPerson = null, ?string $briefanrede = null, ?string $sortierfeld = null, ?string $beruf = null, ?string $abteilung = null, ?string $kostenstelle = null, ?string $adresszeile1 = null, ?string $adresszeile2 = null, ?string $strasse = null, ?string $hausnr = null, ?string $zusatz = null, ?string $postfach = null, ?string $plz = null, ?string $ort = null, ?string $land = null, ?string $email = null, ?string $orgUnit = null, ?string $tel = null, ?string $fax = null, ?string $handyPrivate = null, ?string $handBusiness = null, ?string $birthday = null, ?string $geburtsname = null, ?string $geschlecht = null, ?string $sprache = null, ?string $debitorNo = null, ?string $chargesGroup = null, ?string $creditLimit = null, ?string $concernId = null, ?string $invoiceSignature = null, ?string $vatId = null, ?string $vatLiability = null, ?string $handelsregister = null, ?string $passNo = null, ?string $passValid = null, ?string $passIssued = null, ?string $personalNo = null, ?bool $mailingProhibited = null, ?string $mediatorId = null, ?string $mediatorType = null, ?string $paymentDelay = null, ?string $paymentConditionId = null, ?bool $hasBtContract = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setCompany($company)
            ->setAnrede($anrede)
            ->setTitel($titel)
            ->setRufname($rufname)
            ->setWeitereVornamen($weitereVornamen)
            ->setNachname($nachname)
            ->setNamenszusatz($namenszusatz)
            ->setContactPerson($contactPerson)
            ->setBriefanrede($briefanrede)
            ->setSortierfeld($sortierfeld)
            ->setBeruf($beruf)
            ->setAbteilung($abteilung)
            ->setKostenstelle($kostenstelle)
            ->setAdresszeile1($adresszeile1)
            ->setAdresszeile2($adresszeile2)
            ->setStrasse($strasse)
            ->setHausnr($hausnr)
            ->setZusatz($zusatz)
            ->setPostfach($postfach)
            ->setPlz($plz)
            ->setOrt($ort)
            ->setLand($land)
            ->setEmail($email)
            ->setOrgUnit($orgUnit)
            ->setTel($tel)
            ->setFax($fax)
            ->setHandyPrivate($handyPrivate)
            ->setHandBusiness($handBusiness)
            ->setBirthday($birthday)
            ->setGeburtsname($geburtsname)
            ->setGeschlecht($geschlecht)
            ->setSprache($sprache)
            ->setDebitorNo($debitorNo)
            ->setChargesGroup($chargesGroup)
            ->setCreditLimit($creditLimit)
            ->setConcernId($concernId)
            ->setInvoiceSignature($invoiceSignature)
            ->setVatId($vatId)
            ->setVatLiability($vatLiability)
            ->setHandelsregister($handelsregister)
            ->setPassNo($passNo)
            ->setPassValid($passValid)
            ->setPassIssued($passIssued)
            ->setPersonalNo($personalNo)
            ->setMailingProhibited($mailingProhibited)
            ->setMediatorId($mediatorId)
            ->setMediatorType($mediatorType)
            ->setPaymentDelay($paymentDelay)
            ->setPaymentConditionId($paymentConditionId)
            ->setHasBtContract($hasBtContract);
    }
    /**
     * Get customerId value
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param string $customerId
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setCustomerId(?string $customerId = null): self
    {
        // validation for constraint: string
        if (!is_null($customerId) && !is_string($customerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get company value
     * @return string|null
     */
    public function getCompany(): ?string
    {
        return $this->company;
    }
    /**
     * Set company value
     * @param string $company
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setCompany(?string $company = null): self
    {
        // validation for constraint: string
        if (!is_null($company) && !is_string($company)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($company, true), gettype($company)), __LINE__);
        }
        $this->company = $company;
        
        return $this;
    }
    /**
     * Get anrede value
     * @return string|null
     */
    public function getAnrede(): ?string
    {
        return $this->anrede;
    }
    /**
     * Set anrede value
     * @param string $anrede
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setAnrede(?string $anrede = null): self
    {
        // validation for constraint: string
        if (!is_null($anrede) && !is_string($anrede)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($anrede, true), gettype($anrede)), __LINE__);
        }
        $this->anrede = $anrede;
        
        return $this;
    }
    /**
     * Get titel value
     * @return string|null
     */
    public function getTitel(): ?string
    {
        return $this->titel;
    }
    /**
     * Set titel value
     * @param string $titel
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setTitel(?string $titel = null): self
    {
        // validation for constraint: string
        if (!is_null($titel) && !is_string($titel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($titel, true), gettype($titel)), __LINE__);
        }
        $this->titel = $titel;
        
        return $this;
    }
    /**
     * Get rufname value
     * @return string|null
     */
    public function getRufname(): ?string
    {
        return $this->rufname;
    }
    /**
     * Set rufname value
     * @param string $rufname
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setRufname(?string $rufname = null): self
    {
        // validation for constraint: string
        if (!is_null($rufname) && !is_string($rufname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rufname, true), gettype($rufname)), __LINE__);
        }
        $this->rufname = $rufname;
        
        return $this;
    }
    /**
     * Get weitereVornamen value
     * @return string|null
     */
    public function getWeitereVornamen(): ?string
    {
        return $this->weitereVornamen;
    }
    /**
     * Set weitereVornamen value
     * @param string $weitereVornamen
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setWeitereVornamen(?string $weitereVornamen = null): self
    {
        // validation for constraint: string
        if (!is_null($weitereVornamen) && !is_string($weitereVornamen)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($weitereVornamen, true), gettype($weitereVornamen)), __LINE__);
        }
        $this->weitereVornamen = $weitereVornamen;
        
        return $this;
    }
    /**
     * Get nachname value
     * @return string|null
     */
    public function getNachname(): ?string
    {
        return $this->nachname;
    }
    /**
     * Set nachname value
     * @param string $nachname
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setNachname(?string $nachname = null): self
    {
        // validation for constraint: string
        if (!is_null($nachname) && !is_string($nachname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nachname, true), gettype($nachname)), __LINE__);
        }
        $this->nachname = $nachname;
        
        return $this;
    }
    /**
     * Get namenszusatz value
     * @return string|null
     */
    public function getNamenszusatz(): ?string
    {
        return $this->namenszusatz;
    }
    /**
     * Set namenszusatz value
     * @param string $namenszusatz
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setNamenszusatz(?string $namenszusatz = null): self
    {
        // validation for constraint: string
        if (!is_null($namenszusatz) && !is_string($namenszusatz)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($namenszusatz, true), gettype($namenszusatz)), __LINE__);
        }
        $this->namenszusatz = $namenszusatz;
        
        return $this;
    }
    /**
     * Get contactPerson value
     * @return string|null
     */
    public function getContactPerson(): ?string
    {
        return $this->contactPerson;
    }
    /**
     * Set contactPerson value
     * @param string $contactPerson
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setContactPerson(?string $contactPerson = null): self
    {
        // validation for constraint: string
        if (!is_null($contactPerson) && !is_string($contactPerson)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactPerson, true), gettype($contactPerson)), __LINE__);
        }
        $this->contactPerson = $contactPerson;
        
        return $this;
    }
    /**
     * Get briefanrede value
     * @return string|null
     */
    public function getBriefanrede(): ?string
    {
        return $this->briefanrede;
    }
    /**
     * Set briefanrede value
     * @param string $briefanrede
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setBriefanrede(?string $briefanrede = null): self
    {
        // validation for constraint: string
        if (!is_null($briefanrede) && !is_string($briefanrede)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($briefanrede, true), gettype($briefanrede)), __LINE__);
        }
        $this->briefanrede = $briefanrede;
        
        return $this;
    }
    /**
     * Get sortierfeld value
     * @return string|null
     */
    public function getSortierfeld(): ?string
    {
        return $this->sortierfeld;
    }
    /**
     * Set sortierfeld value
     * @param string $sortierfeld
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setSortierfeld(?string $sortierfeld = null): self
    {
        // validation for constraint: string
        if (!is_null($sortierfeld) && !is_string($sortierfeld)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sortierfeld, true), gettype($sortierfeld)), __LINE__);
        }
        $this->sortierfeld = $sortierfeld;
        
        return $this;
    }
    /**
     * Get beruf value
     * @return string|null
     */
    public function getBeruf(): ?string
    {
        return $this->beruf;
    }
    /**
     * Set beruf value
     * @param string $beruf
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setBeruf(?string $beruf = null): self
    {
        // validation for constraint: string
        if (!is_null($beruf) && !is_string($beruf)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($beruf, true), gettype($beruf)), __LINE__);
        }
        $this->beruf = $beruf;
        
        return $this;
    }
    /**
     * Get abteilung value
     * @return string|null
     */
    public function getAbteilung(): ?string
    {
        return $this->abteilung;
    }
    /**
     * Set abteilung value
     * @param string $abteilung
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setAbteilung(?string $abteilung = null): self
    {
        // validation for constraint: string
        if (!is_null($abteilung) && !is_string($abteilung)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($abteilung, true), gettype($abteilung)), __LINE__);
        }
        $this->abteilung = $abteilung;
        
        return $this;
    }
    /**
     * Get kostenstelle value
     * @return string|null
     */
    public function getKostenstelle(): ?string
    {
        return $this->kostenstelle;
    }
    /**
     * Set kostenstelle value
     * @param string $kostenstelle
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setKostenstelle(?string $kostenstelle = null): self
    {
        // validation for constraint: string
        if (!is_null($kostenstelle) && !is_string($kostenstelle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kostenstelle, true), gettype($kostenstelle)), __LINE__);
        }
        $this->kostenstelle = $kostenstelle;
        
        return $this;
    }
    /**
     * Get adresszeile1 value
     * @return string|null
     */
    public function getAdresszeile1(): ?string
    {
        return $this->adresszeile1;
    }
    /**
     * Set adresszeile1 value
     * @param string $adresszeile1
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setAdresszeile1(?string $adresszeile1 = null): self
    {
        // validation for constraint: string
        if (!is_null($adresszeile1) && !is_string($adresszeile1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adresszeile1, true), gettype($adresszeile1)), __LINE__);
        }
        $this->adresszeile1 = $adresszeile1;
        
        return $this;
    }
    /**
     * Get adresszeile2 value
     * @return string|null
     */
    public function getAdresszeile2(): ?string
    {
        return $this->adresszeile2;
    }
    /**
     * Set adresszeile2 value
     * @param string $adresszeile2
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setAdresszeile2(?string $adresszeile2 = null): self
    {
        // validation for constraint: string
        if (!is_null($adresszeile2) && !is_string($adresszeile2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adresszeile2, true), gettype($adresszeile2)), __LINE__);
        }
        $this->adresszeile2 = $adresszeile2;
        
        return $this;
    }
    /**
     * Get strasse value
     * @return string|null
     */
    public function getStrasse(): ?string
    {
        return $this->strasse;
    }
    /**
     * Set strasse value
     * @param string $strasse
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setStrasse(?string $strasse = null): self
    {
        // validation for constraint: string
        if (!is_null($strasse) && !is_string($strasse)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($strasse, true), gettype($strasse)), __LINE__);
        }
        $this->strasse = $strasse;
        
        return $this;
    }
    /**
     * Get hausnr value
     * @return string|null
     */
    public function getHausnr(): ?string
    {
        return $this->hausnr;
    }
    /**
     * Set hausnr value
     * @param string $hausnr
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setHausnr(?string $hausnr = null): self
    {
        // validation for constraint: string
        if (!is_null($hausnr) && !is_string($hausnr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hausnr, true), gettype($hausnr)), __LINE__);
        }
        $this->hausnr = $hausnr;
        
        return $this;
    }
    /**
     * Get zusatz value
     * @return string|null
     */
    public function getZusatz(): ?string
    {
        return $this->zusatz;
    }
    /**
     * Set zusatz value
     * @param string $zusatz
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setZusatz(?string $zusatz = null): self
    {
        // validation for constraint: string
        if (!is_null($zusatz) && !is_string($zusatz)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zusatz, true), gettype($zusatz)), __LINE__);
        }
        $this->zusatz = $zusatz;
        
        return $this;
    }
    /**
     * Get postfach value
     * @return string|null
     */
    public function getPostfach(): ?string
    {
        return $this->postfach;
    }
    /**
     * Set postfach value
     * @param string $postfach
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setPostfach(?string $postfach = null): self
    {
        // validation for constraint: string
        if (!is_null($postfach) && !is_string($postfach)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postfach, true), gettype($postfach)), __LINE__);
        }
        $this->postfach = $postfach;
        
        return $this;
    }
    /**
     * Get plz value
     * @return string|null
     */
    public function getPlz(): ?string
    {
        return $this->plz;
    }
    /**
     * Set plz value
     * @param string $plz
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setPlz(?string $plz = null): self
    {
        // validation for constraint: string
        if (!is_null($plz) && !is_string($plz)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($plz, true), gettype($plz)), __LINE__);
        }
        $this->plz = $plz;
        
        return $this;
    }
    /**
     * Get ort value
     * @return string|null
     */
    public function getOrt(): ?string
    {
        return $this->ort;
    }
    /**
     * Set ort value
     * @param string $ort
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setOrt(?string $ort = null): self
    {
        // validation for constraint: string
        if (!is_null($ort) && !is_string($ort)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ort, true), gettype($ort)), __LINE__);
        }
        $this->ort = $ort;
        
        return $this;
    }
    /**
     * Get land value
     * @return string|null
     */
    public function getLand(): ?string
    {
        return $this->land;
    }
    /**
     * Set land value
     * @param string $land
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setLand(?string $land = null): self
    {
        // validation for constraint: string
        if (!is_null($land) && !is_string($land)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($land, true), gettype($land)), __LINE__);
        }
        $this->land = $land;
        
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
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
     * Get orgUnit value
     * @return string|null
     */
    public function getOrgUnit(): ?string
    {
        return $this->orgUnit;
    }
    /**
     * Set orgUnit value
     * @param string $orgUnit
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setOrgUnit(?string $orgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnit) && !is_string($orgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnit, true), gettype($orgUnit)), __LINE__);
        }
        $this->orgUnit = $orgUnit;
        
        return $this;
    }
    /**
     * Get tel value
     * @return string|null
     */
    public function getTel(): ?string
    {
        return $this->tel;
    }
    /**
     * Set tel value
     * @param string $tel
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setTel(?string $tel = null): self
    {
        // validation for constraint: string
        if (!is_null($tel) && !is_string($tel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tel, true), gettype($tel)), __LINE__);
        }
        $this->tel = $tel;
        
        return $this;
    }
    /**
     * Get fax value
     * @return string|null
     */
    public function getFax(): ?string
    {
        return $this->fax;
    }
    /**
     * Set fax value
     * @param string $fax
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setFax(?string $fax = null): self
    {
        // validation for constraint: string
        if (!is_null($fax) && !is_string($fax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fax, true), gettype($fax)), __LINE__);
        }
        $this->fax = $fax;
        
        return $this;
    }
    /**
     * Get handyPrivate value
     * @return string|null
     */
    public function getHandyPrivate(): ?string
    {
        return $this->handyPrivate;
    }
    /**
     * Set handyPrivate value
     * @param string $handyPrivate
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setHandyPrivate(?string $handyPrivate = null): self
    {
        // validation for constraint: string
        if (!is_null($handyPrivate) && !is_string($handyPrivate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($handyPrivate, true), gettype($handyPrivate)), __LINE__);
        }
        $this->handyPrivate = $handyPrivate;
        
        return $this;
    }
    /**
     * Get handBusiness value
     * @return string|null
     */
    public function getHandBusiness(): ?string
    {
        return $this->handBusiness;
    }
    /**
     * Set handBusiness value
     * @param string $handBusiness
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setHandBusiness(?string $handBusiness = null): self
    {
        // validation for constraint: string
        if (!is_null($handBusiness) && !is_string($handBusiness)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($handBusiness, true), gettype($handBusiness)), __LINE__);
        }
        $this->handBusiness = $handBusiness;
        
        return $this;
    }
    /**
     * Get birthday value
     * @return string|null
     */
    public function getBirthday(): ?string
    {
        return $this->birthday;
    }
    /**
     * Set birthday value
     * @param string $birthday
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setBirthday(?string $birthday = null): self
    {
        // validation for constraint: string
        if (!is_null($birthday) && !is_string($birthday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($birthday, true), gettype($birthday)), __LINE__);
        }
        $this->birthday = $birthday;
        
        return $this;
    }
    /**
     * Get geburtsname value
     * @return string|null
     */
    public function getGeburtsname(): ?string
    {
        return $this->geburtsname;
    }
    /**
     * Set geburtsname value
     * @param string $geburtsname
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setGeburtsname(?string $geburtsname = null): self
    {
        // validation for constraint: string
        if (!is_null($geburtsname) && !is_string($geburtsname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($geburtsname, true), gettype($geburtsname)), __LINE__);
        }
        $this->geburtsname = $geburtsname;
        
        return $this;
    }
    /**
     * Get geschlecht value
     * @return string|null
     */
    public function getGeschlecht(): ?string
    {
        return $this->geschlecht;
    }
    /**
     * Set geschlecht value
     * @param string $geschlecht
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setGeschlecht(?string $geschlecht = null): self
    {
        // validation for constraint: string
        if (!is_null($geschlecht) && !is_string($geschlecht)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($geschlecht, true), gettype($geschlecht)), __LINE__);
        }
        $this->geschlecht = $geschlecht;
        
        return $this;
    }
    /**
     * Get sprache value
     * @return string|null
     */
    public function getSprache(): ?string
    {
        return $this->sprache;
    }
    /**
     * Set sprache value
     * @param string $sprache
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setSprache(?string $sprache = null): self
    {
        // validation for constraint: string
        if (!is_null($sprache) && !is_string($sprache)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sprache, true), gettype($sprache)), __LINE__);
        }
        $this->sprache = $sprache;
        
        return $this;
    }
    /**
     * Get debitorNo value
     * @return string|null
     */
    public function getDebitorNo(): ?string
    {
        return $this->debitorNo;
    }
    /**
     * Set debitorNo value
     * @param string $debitorNo
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setDebitorNo(?string $debitorNo = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorNo) && !is_string($debitorNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorNo, true), gettype($debitorNo)), __LINE__);
        }
        $this->debitorNo = $debitorNo;
        
        return $this;
    }
    /**
     * Get chargesGroup value
     * @return string|null
     */
    public function getChargesGroup(): ?string
    {
        return $this->chargesGroup;
    }
    /**
     * Set chargesGroup value
     * @param string $chargesGroup
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setChargesGroup(?string $chargesGroup = null): self
    {
        // validation for constraint: string
        if (!is_null($chargesGroup) && !is_string($chargesGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($chargesGroup, true), gettype($chargesGroup)), __LINE__);
        }
        $this->chargesGroup = $chargesGroup;
        
        return $this;
    }
    /**
     * Get creditLimit value
     * @return string|null
     */
    public function getCreditLimit(): ?string
    {
        return $this->creditLimit;
    }
    /**
     * Set creditLimit value
     * @param string $creditLimit
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setCreditLimit(?string $creditLimit = null): self
    {
        // validation for constraint: string
        if (!is_null($creditLimit) && !is_string($creditLimit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditLimit, true), gettype($creditLimit)), __LINE__);
        }
        $this->creditLimit = $creditLimit;
        
        return $this;
    }
    /**
     * Get concernId value
     * @return string|null
     */
    public function getConcernId(): ?string
    {
        return $this->concernId;
    }
    /**
     * Set concernId value
     * @param string $concernId
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setConcernId(?string $concernId = null): self
    {
        // validation for constraint: string
        if (!is_null($concernId) && !is_string($concernId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($concernId, true), gettype($concernId)), __LINE__);
        }
        $this->concernId = $concernId;
        
        return $this;
    }
    /**
     * Get invoiceSignature value
     * @return string|null
     */
    public function getInvoiceSignature(): ?string
    {
        return $this->invoiceSignature;
    }
    /**
     * Set invoiceSignature value
     * @param string $invoiceSignature
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setInvoiceSignature(?string $invoiceSignature = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceSignature) && !is_string($invoiceSignature)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceSignature, true), gettype($invoiceSignature)), __LINE__);
        }
        $this->invoiceSignature = $invoiceSignature;
        
        return $this;
    }
    /**
     * Get vatId value
     * @return string|null
     */
    public function getVatId(): ?string
    {
        return $this->vatId;
    }
    /**
     * Set vatId value
     * @param string $vatId
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setVatId(?string $vatId = null): self
    {
        // validation for constraint: string
        if (!is_null($vatId) && !is_string($vatId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatId, true), gettype($vatId)), __LINE__);
        }
        $this->vatId = $vatId;
        
        return $this;
    }
    /**
     * Get vatLiability value
     * @return string|null
     */
    public function getVatLiability(): ?string
    {
        return $this->vatLiability;
    }
    /**
     * Set vatLiability value
     * @param string $vatLiability
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setVatLiability(?string $vatLiability = null): self
    {
        // validation for constraint: string
        if (!is_null($vatLiability) && !is_string($vatLiability)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatLiability, true), gettype($vatLiability)), __LINE__);
        }
        $this->vatLiability = $vatLiability;
        
        return $this;
    }
    /**
     * Get handelsregister value
     * @return string|null
     */
    public function getHandelsregister(): ?string
    {
        return $this->handelsregister;
    }
    /**
     * Set handelsregister value
     * @param string $handelsregister
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setHandelsregister(?string $handelsregister = null): self
    {
        // validation for constraint: string
        if (!is_null($handelsregister) && !is_string($handelsregister)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($handelsregister, true), gettype($handelsregister)), __LINE__);
        }
        $this->handelsregister = $handelsregister;
        
        return $this;
    }
    /**
     * Get passNo value
     * @return string|null
     */
    public function getPassNo(): ?string
    {
        return $this->passNo;
    }
    /**
     * Set passNo value
     * @param string $passNo
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setPassNo(?string $passNo = null): self
    {
        // validation for constraint: string
        if (!is_null($passNo) && !is_string($passNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passNo, true), gettype($passNo)), __LINE__);
        }
        $this->passNo = $passNo;
        
        return $this;
    }
    /**
     * Get passValid value
     * @return string|null
     */
    public function getPassValid(): ?string
    {
        return $this->passValid;
    }
    /**
     * Set passValid value
     * @param string $passValid
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setPassValid(?string $passValid = null): self
    {
        // validation for constraint: string
        if (!is_null($passValid) && !is_string($passValid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passValid, true), gettype($passValid)), __LINE__);
        }
        $this->passValid = $passValid;
        
        return $this;
    }
    /**
     * Get passIssued value
     * @return string|null
     */
    public function getPassIssued(): ?string
    {
        return $this->passIssued;
    }
    /**
     * Set passIssued value
     * @param string $passIssued
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setPassIssued(?string $passIssued = null): self
    {
        // validation for constraint: string
        if (!is_null($passIssued) && !is_string($passIssued)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passIssued, true), gettype($passIssued)), __LINE__);
        }
        $this->passIssued = $passIssued;
        
        return $this;
    }
    /**
     * Get personalNo value
     * @return string|null
     */
    public function getPersonalNo(): ?string
    {
        return $this->personalNo;
    }
    /**
     * Set personalNo value
     * @param string $personalNo
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setPersonalNo(?string $personalNo = null): self
    {
        // validation for constraint: string
        if (!is_null($personalNo) && !is_string($personalNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personalNo, true), gettype($personalNo)), __LINE__);
        }
        $this->personalNo = $personalNo;
        
        return $this;
    }
    /**
     * Get mailingProhibited value
     * @return bool|null
     */
    public function getMailingProhibited(): ?bool
    {
        return $this->mailingProhibited;
    }
    /**
     * Set mailingProhibited value
     * @param bool $mailingProhibited
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setMailingProhibited(?bool $mailingProhibited = null): self
    {
        // validation for constraint: boolean
        if (!is_null($mailingProhibited) && !is_bool($mailingProhibited)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mailingProhibited, true), gettype($mailingProhibited)), __LINE__);
        }
        $this->mailingProhibited = $mailingProhibited;
        
        return $this;
    }
    /**
     * Get mediatorId value
     * @return string|null
     */
    public function getMediatorId(): ?string
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param string $mediatorId
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setMediatorId(?string $mediatorId = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorId) && !is_string($mediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
        return $this;
    }
    /**
     * Get mediatorType value
     * @return string|null
     */
    public function getMediatorType(): ?string
    {
        return $this->mediatorType;
    }
    /**
     * Set mediatorType value
     * @param string $mediatorType
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setMediatorType(?string $mediatorType = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorType) && !is_string($mediatorType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorType, true), gettype($mediatorType)), __LINE__);
        }
        $this->mediatorType = $mediatorType;
        
        return $this;
    }
    /**
     * Get paymentDelay value
     * @return string|null
     */
    public function getPaymentDelay(): ?string
    {
        return $this->paymentDelay;
    }
    /**
     * Set paymentDelay value
     * @param string $paymentDelay
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setPaymentDelay(?string $paymentDelay = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentDelay) && !is_string($paymentDelay)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentDelay, true), gettype($paymentDelay)), __LINE__);
        }
        $this->paymentDelay = $paymentDelay;
        
        return $this;
    }
    /**
     * Get paymentConditionId value
     * @return string|null
     */
    public function getPaymentConditionId(): ?string
    {
        return $this->paymentConditionId;
    }
    /**
     * Set paymentConditionId value
     * @param string $paymentConditionId
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setPaymentConditionId(?string $paymentConditionId = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentConditionId) && !is_string($paymentConditionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentConditionId, true), gettype($paymentConditionId)), __LINE__);
        }
        $this->paymentConditionId = $paymentConditionId;
        
        return $this;
    }
    /**
     * Get hasBtContract value
     * @return bool|null
     */
    public function getHasBtContract(): ?bool
    {
        return $this->hasBtContract;
    }
    /**
     * Set hasBtContract value
     * @param bool $hasBtContract
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoImportCustomer
     */
    public function setHasBtContract(?bool $hasBtContract = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasBtContract) && !is_bool($hasBtContract)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasBtContract, true), gettype($hasBtContract)), __LINE__);
        }
        $this->hasBtContract = $hasBtContract;
        
        return $this;
    }
}
