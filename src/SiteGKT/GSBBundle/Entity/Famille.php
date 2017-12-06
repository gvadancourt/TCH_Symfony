<?php 

namespace SiteGKT\GSBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Famille
 *
 * @ORM\Table(name="GKTFamille")
 * @ORM\Entity(repositoryClass="SiteGKT\GSBBundle\Entity\FamilleRepository")
 */
class Famille
{
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
     * @ORM\Column(name="FAM_Libelle", type="string", length=255)
     */
    private $FAM_Libelle;


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
     * Set FAM_Libelle
     *
     * @param string $FAM_Libelle
     * @return Famille
     */
    public function setFAMLibelle($FAM_Libelle)
    {
        $this->FAM_Libelle = $FAM_Libelle;
    
        return $this;
    }

    /**
     * Get FAM_Libelle
     *
     * @return string 
     */
    public function getFAMLibelle()
    {
        return $this->FAM_Libelle;
    }
}