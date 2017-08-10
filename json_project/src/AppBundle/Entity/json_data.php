<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * json_data
 *
 * @ORM\Table(name="json_data")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\json_dataRepository")
 */
class json_data
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="account_name", type="string", length=255)
     */
    private $accountName;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="year", type="string", length=255)
     */
    private $year;

    /**
     * @var string
     *
     * @ORM\Column(name="month", type="string", length=255)
     */
    private $month;

    /**
     * @var string
     *
     * @ORM\Column(name="A_Cycles", type="string", length=255)
     */
    private $aCycles;

    /**
     * @var string
     *
     * @ORM\Column(name="B_Cycles", type="string", length=255)
     */
    private $bCycles;

    /**
     * @var string
     *
     * @ORM\Column(name="C_Cycles", type="string", length=255)
     */
    private $cCycles;

    /**
     * @var string
     *
     * @ORM\Column(name="D_Cycles", type="string", length=255)
     */
    private $dCycles;

    /**
     * @var string
     *
     * @ORM\Column(name="E_Cycles", type="string", length=255)
     */
    private $eCycles;

    /**
     * @var string
     *
     * @ORM\Column(name="A_Total", type="string", length=255)
     */
    private $aTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="B_Total", type="string", length=255)
     */
    private $bTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="C_Total", type="string", length=255)
     */
    private $cTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="Endo_equip", type="string", length=255)
     */
    private $endoEquip;

    /**
     * @var string
     *
     * @ORM\Column(name="Endo_room", type="string", length=255)
     */
    private $endoRoom;

    /**
     * @var string
     *
     * @ORM\Column(name="Gen_surg", type="string", length=255)
     */
    private $genSurg;

    /**
     * @var string
     *
     * @ORM\Column(name="Gen_ortho", type="string", length=255)
     */
    private $genOrtho;

    /**
     * @var string
     *
     * @ORM\Column(name="Labor_Del", type="string", length=255)
     */
    private $laborDel;

    /**
     * @var string
     *
     * @ORM\Column(name="Loparoscopic", type="string", length=255)
     */
    private $loparoscopic;

    /**
     * @var string
     *
     * @ORM\Column(name="Monthly_det", type="string", length=255)
     */
    private $monthlyDet;

    /**
     * @var string
     *
     * @ORM\Column(name="Non_Resp", type="string", length=255)
     */
    private $nonResp;

    /**
     * @var string
     *
     * @ORM\Column(name="Op_rooms", type="string", length=255)
     */
    private $opRooms;

    /**
     * @var string
     *
     * @ORM\Column(name="Positive_bio", type="string", length=255)
     */
    private $positiveBio;

    /**
     * @var string
     *
     * @ORM\Column(name="Other_in_pat", type="string", length=255)
     */
    private $otherInPat;

    /**
     * @var string
     *
     * @ORM\Column(name="Speciality_trays", type="string", length=255)
     */
    private $specialityTrays;

    /**
     * @var string
     *
     * @ORM\Column(name="Sterilization", type="string", length=255)
     */
    private $sterilization;

    /**
     * @var string
     *
     * @ORM\Column(name="Numb_oph", type="string", length=255)
     */
    private $numbOph;

    /**
     * @var string
     *
     * @ORM\Column(name="Workplace_inj", type="string", length=255)
     */
    private $workplaceInj;

    /**
     * @var string
     *
     * @ORM\Column(name="Sterilization_loads", type="string", length=255)
     */
    private $sterilizationLoads;

    /**
     * @var int
     *
     * @ORM\Column(name="pantalla_id", type="integer")
     */
    private $pantallaId;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return json_data
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set accountName
     *
     * @param string $accountName
     *
     * @return json_data
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;

        return $this;
    }

    /**
     * Get accountName
     *
     * @return string
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return json_data
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return json_data
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set year
     *
     * @param string $year
     *
     * @return json_data
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return string
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set month
     *
     * @param string $month
     *
     * @return json_data
     */
    public function setMonth($month)
    {
        $this->month = $month;

        return $this;
    }

    /**
     * Get month
     *
     * @return string
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Set aCycles
     *
     * @param string $aCycles
     *
     * @return json_data
     */
    public function setACycles($aCycles)
    {
        $this->aCycles = $aCycles;

        return $this;
    }

    /**
     * Get aCycles
     *
     * @return string
     */
    public function getACycles()
    {
        return $this->aCycles;
    }

    /**
     * Set bCycles
     *
     * @param string $bCycles
     *
     * @return json_data
     */
    public function setBCycles($bCycles)
    {
        $this->bCycles = $bCycles;

        return $this;
    }

    /**
     * Get bCycles
     *
     * @return string
     */
    public function getBCycles()
    {
        return $this->bCycles;
    }

    /**
     * Set cCycles
     *
     * @param string $cCycles
     *
     * @return json_data
     */
    public function setCCycles($cCycles)
    {
        $this->cCycles = $cCycles;

        return $this;
    }

    /**
     * Get cCycles
     *
     * @return string
     */
    public function getCCycles()
    {
        return $this->cCycles;
    }

    /**
     * Set dCycles
     *
     * @param string $dCycles
     *
     * @return json_data
     */
    public function setDCycles($dCycles)
    {
        $this->dCycles = $dCycles;

        return $this;
    }

    /**
     * Get dCycles
     *
     * @return string
     */
    public function getDCycles()
    {
        return $this->dCycles;
    }

    /**
     * Set eCycles
     *
     * @param string $eCycles
     *
     * @return json_data
     */
    public function setECycles($eCycles)
    {
        $this->eCycles = $eCycles;

        return $this;
    }

    /**
     * Get eCycles
     *
     * @return string
     */
    public function getECycles()
    {
        return $this->eCycles;
    }

    /**
     * Set aTotal
     *
     * @param string $aTotal
     *
     * @return json_data
     */
    public function setATotal($aTotal)
    {
        $this->aTotal = $aTotal;

        return $this;
    }

    /**
     * Get aTotal
     *
     * @return string
     */
    public function getATotal()
    {
        return $this->aTotal;
    }

    /**
     * Set bTotal
     *
     * @param string $bTotal
     *
     * @return json_data
     */
    public function setBTotal($bTotal)
    {
        $this->bTotal = $bTotal;

        return $this;
    }

    /**
     * Get bTotal
     *
     * @return string
     */
    public function getBTotal()
    {
        return $this->bTotal;
    }

    /**
     * Set cTotal
     *
     * @param string $cTotal
     *
     * @return json_data
     */
    public function setCTotal($cTotal)
    {
        $this->cTotal = $cTotal;

        return $this;
    }

    /**
     * Get cTotal
     *
     * @return string
     */
    public function getCTotal()
    {
        return $this->cTotal;
    }

    /**
     * Set endoEquip
     *
     * @param string $endoEquip
     *
     * @return json_data
     */
    public function setEndoEquip($endoEquip)
    {
        $this->endoEquip = $endoEquip;

        return $this;
    }

    /**
     * Get endoEquip
     *
     * @return string
     */
    public function getEndoEquip()
    {
        return $this->endoEquip;
    }

    /**
     * Set endoRoom
     *
     * @param string $endoRoom
     *
     * @return json_data
     */
    public function setEndoRoom($endoRoom)
    {
        $this->endoRoom = $endoRoom;

        return $this;
    }

    /**
     * Get endoRoom
     *
     * @return string
     */
    public function getEndoRoom()
    {
        return $this->endoRoom;
    }

    /**
     * Set genSurg
     *
     * @param string $genSurg
     *
     * @return json_data
     */
    public function setGenSurg($genSurg)
    {
        $this->genSurg = $genSurg;

        return $this;
    }

    /**
     * Get genSurg
     *
     * @return string
     */
    public function getGenSurg()
    {
        return $this->genSurg;
    }

    /**
     * Set genOrtho
     *
     * @param string $genOrtho
     *
     * @return json_data
     */
    public function setGenOrtho($genOrtho)
    {
        $this->genOrtho = $genOrtho;

        return $this;
    }

    /**
     * Get genOrtho
     *
     * @return string
     */
    public function getGenOrtho()
    {
        return $this->genOrtho;
    }

    /**
     * Set laborDel
     *
     * @param string $laborDel
     *
     * @return json_data
     */
    public function setLaborDel($laborDel)
    {
        $this->laborDel = $laborDel;

        return $this;
    }

    /**
     * Get laborDel
     *
     * @return string
     */
    public function getLaborDel()
    {
        return $this->laborDel;
    }

    /**
     * Set loparoscopic
     *
     * @param string $loparoscopic
     *
     * @return json_data
     */
    public function setLoparoscopic($loparoscopic)
    {
        $this->loparoscopic = $loparoscopic;

        return $this;
    }

    /**
     * Get loparoscopic
     *
     * @return string
     */
    public function getLoparoscopic()
    {
        return $this->loparoscopic;
    }

    /**
     * Set monthlyDet
     *
     * @param string $monthlyDet
     *
     * @return json_data
     */
    public function setMonthlyDet($monthlyDet)
    {
        $this->monthlyDet = $monthlyDet;

        return $this;
    }

    /**
     * Get monthlyDet
     *
     * @return string
     */
    public function getMonthlyDet()
    {
        return $this->monthlyDet;
    }

    /**
     * Set nonResp
     *
     * @param string $nonResp
     *
     * @return json_data
     */
    public function setNonResp($nonResp)
    {
        $this->nonResp = $nonResp;

        return $this;
    }

    /**
     * Get nonResp
     *
     * @return string
     */
    public function getNonResp()
    {
        return $this->nonResp;
    }

    /**
     * Set opRooms
     *
     * @param string $opRooms
     *
     * @return json_data
     */
    public function setOpRooms($opRooms)
    {
        $this->opRooms = $opRooms;

        return $this;
    }

    /**
     * Get opRooms
     *
     * @return string
     */
    public function getOpRooms()
    {
        return $this->opRooms;
    }

    /**
     * Set positiveBio
     *
     * @param string $positiveBio
     *
     * @return json_data
     */
    public function setPositiveBio($positiveBio)
    {
        $this->positiveBio = $positiveBio;

        return $this;
    }

    /**
     * Get positiveBio
     *
     * @return string
     */
    public function getPositiveBio()
    {
        return $this->positiveBio;
    }

    /**
     * Set otherInPat
     *
     * @param string $otherInPat
     *
     * @return json_data
     */
    public function setOtherInPat($otherInPat)
    {
        $this->otherInPat = $otherInPat;

        return $this;
    }

    /**
     * Get otherInPat
     *
     * @return string
     */
    public function getOtherInPat()
    {
        return $this->otherInPat;
    }

    /**
     * Set specialityTrays
     *
     * @param string $specialityTrays
     *
     * @return json_data
     */
    public function setSpecialityTrays($specialityTrays)
    {
        $this->specialityTrays = $specialityTrays;

        return $this;
    }

    /**
     * Get specialityTrays
     *
     * @return string
     */
    public function getSpecialityTrays()
    {
        return $this->specialityTrays;
    }

    /**
     * Set sterilization
     *
     * @param string $sterilization
     *
     * @return json_data
     */
    public function setSterilization($sterilization)
    {
        $this->sterilization = $sterilization;

        return $this;
    }

    /**
     * Get sterilization
     *
     * @return string
     */
    public function getSterilization()
    {
        return $this->sterilization;
    }

    /**
     * Set numbOph
     *
     * @param string $numbOph
     *
     * @return json_data
     */
    public function setNumbOph($numbOph)
    {
        $this->numbOph = $numbOph;

        return $this;
    }

    /**
     * Get numbOph
     *
     * @return string
     */
    public function getNumbOph()
    {
        return $this->numbOph;
    }

    /**
     * Set workplaceInj
     *
     * @param string $workplaceInj
     *
     * @return json_data
     */
    public function setWorkplaceInj($workplaceInj)
    {
        $this->workplaceInj = $workplaceInj;

        return $this;
    }

    /**
     * Get workplaceInj
     *
     * @return string
     */
    public function getWorkplaceInj()
    {
        return $this->workplaceInj;
    }

    /**
     * Set sterilizationLoads
     *
     * @param string $sterilizationLoads
     *
     * @return json_data
     */
    public function setSterilizationLoads($sterilizationLoads)
    {
        $this->sterilizationLoads = $sterilizationLoads;

        return $this;
    }

    /**
     * Get sterilizationLoads
     *
     * @return string
     */
    public function getSterilizationLoads()
    {
        return $this->sterilizationLoads;
    }

    /**
     * Set pantallaId
     *
     * @param integer $pantallaId
     *
     * @return json_data
     */
    public function setPantallaId($pantallaId)
    {
        $this->pantallaId = $pantallaId;

        return $this;
    }

    /**
     * Get pantallaId
     *
     * @return int
     */
    public function getPantallaId()
    {
        return $this->pantallaId;
    }
}

