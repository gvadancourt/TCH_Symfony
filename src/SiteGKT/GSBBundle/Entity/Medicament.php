<?php

namespace SiteGKT\GSBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medicament
 *
 * @ORM\Table(name="GKTMedicament")
 * @ORM\Entity(repositoryClass="SiteGKT\GSBBundle\Entity\MedicamentRepository")
 */
class Medicament
{
	/**
	*@ORM\ManyToMany(targetEntity="SiteGKT\GSBBundle\Entity\Composition", cascade={"persist"})
	*/
	private $composition;
	
	/**
	*@ORM\ManyToOne(targetEntity="SiteGKT\GSBBundle\Entity\Famille")
	*@ORM\JoinColumn(nullable=false)
	*/
	private $famille;
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

     /**
     * @var string
     *
     * @ORM\Column(name="MED_DepotLegal", type="string", length=50)
     */
    private $MED_DepotLegal;

     /**
     * @var string
     *
     * @ORM\Column(name="MED_ContreIndic", type="string", length=255)
     */
    private $MED_ContreIndic;

    /**
     * @var string
     *
     * @ORM\Column(name="MED_Nomcommercial", type="string", length=255)
     */
    private $MED_Nomcommercial;

    /**
     * @var string
     *
     * @ORM\Column(name="MED_Effets", type="string", length=255)
     */
    private $MED_Effets;

    /**
     * @var string
     *
     * @ORM\Column(name="MED_PrixEchantillon", type="string", length=255)
     */
    private $MED_PrixEchantillon;
	

    /**
     * Set MED_Nomcommercial
     *
     * @param string $MED_Nomcommercial
     * @return Medicament
     */
    public function setMED_Nomcommercial($MED_Nomcommercial)
    {
        $this->MED_Nomcommercial = $MED_Nomcommercial;
    
        return $this;
    }

    /**
     * Get MED_Nomcommercial
     *
     * @return string 
     */
    public function getMED_Nomcommercial()
    {
        return $this->MED_Nomcommercial;
    }

    /**
     * Set MED_Effets
     *
     * @param string $MED_Effets
     * @return Medicament
     */
    public function setMED_Effets($MED_Effets)
    {
        $this->MED_Effets = $MED_Effets;
    
        return $this;
    }

    /**
     * Get $MED_Effets
     *
     * @return string 
     */
    public function getMED_Effets()
    {
        return $this->MED_Effets;
    }

    /**
     * Set MED_PrixEchantillon
     *
     * @param string $MED_PrixEchantillon
     * @return Medicament
     */
    public function setMED_PrixEchantillon($MED_PrixEchantillon)
    {
        $this->MED_PrixEchantillon = $MED_PrixEchantillon;
    
        return $this;
    }

    /**
     * Get MED_PrixEchantillon
     *
     * @return string 
     */
    public function getMED_PrixEchantillon()
    {
        return $this->MED_PrixEchantillon;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->composition = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get MED_DepotLegal
     *
     * @return integer 
     */
    public function getMED_DepotLegal()
    {
        return $this->MED_DepotLegal;
    }

    /**
     * Set MED_Nomcommercial
     *
     * @param string $mEDNomcommercial
     * @return Medicament
     */
    public function setMEDNomcommercial($mEDNomcommercial)
    {
        $this->MED_Nomcommercial = $mEDNomcommercial;
    
        return $this;
    }

    /**
     * Get MED_Nomcommercial
     *
     * @return string 
     */
    public function getMEDNomcommercial()
    {
        return $this->MED_Nomcommercial;
    }

    /**
     * Set MED_Effets
     *
     * @param string $mEDEffets
     * @return Medicament
     */
    public function setMEDEffets($mEDEffets)
    {
        $this->MED_Effets = $mEDEffets;
    
        return $this;
    }

    /**
     * Get MED_Effets
     *
     * @return string 
     */
    public function getMEDEffets()
    {
        return $this->MED_Effets;
    }

    /**
     * Set MED_PrixEchantillon
     *
     * @param string $mEDPrixEchantillon
     * @return Medicament
     */
    public function setMEDPrixEchantillon($mEDPrixEchantillon)
    {
        $this->MED_PrixEchantillon = $mEDPrixEchantillon;
    
        return $this;
    }

    /**
     * Get MED_PrixEchantillon
     *
     * @return string 
     */
    public function getMEDPrixEchantillon()
    {
        return $this->MED_PrixEchantillon;
    }

    /**
     * Add composition
     *
     * @param \SiteGKT\GSBBundle\Entity\Composition $composition
     * @return Medicament
     */
    public function addComposition(\SiteGKT\GSBBundle\Entity\Composition $composition)
    {
        $this->composition[] = $composition;
    
        return $this;
    }

    /**
     * Remove composition
     *
     * @param \SiteGKT\GSBBundle\Entity\Composition $composition
     */
    public function removeComposition(\SiteGKT\GSBBundle\Entity\Composition $composition)
    {
        $this->composition->removeElement($composition);
    }

    /**
     * Get composition
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComposition()
    {
        return $this->composition;
    }

    /**
     * Set famille
     *
     * @param \SiteGKT\GSBBundle\Entity\Famille $famille
     * @return Medicament
     */
    public function setFamille(\SiteGKT\GSBBundle\Entity\Famille $famille)
    {
        $this->famille = $famille;
    
        return $this;
    }

    /**
     * Get famille
     *
     * @return \SiteGKT\GSBBundle\Entity\Famille 
     */
    public function getFamille()
    {
        return $this->famille;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set MED_DepotLegal
     *
     * @param string $mEDDepotLegal
     * @return Medicament
     */
    public function setMEDDepotLegal($mEDDepotLegal)
    {
        $this->MED_DepotLegal = $mEDDepotLegal;
    
        return $this;
    }

    /**
     * Set MED_ContreIndic
     *
     * @param string $mEDContreIndic
     * @return Medicament
     */
    public function setMEDContreIndic($mEDContreIndic)
    {
        $this->MED_ContreIndic = $mEDContreIndic;
    
        return $this;
    }

    /**
     * Get MED_ContreIndic
     *
     * @return string 
     */
    public function getMED_ContreIndic()
    {
        return $this->MED_ContreIndic;
    }
}