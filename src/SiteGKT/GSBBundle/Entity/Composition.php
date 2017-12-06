<?php

namespace SiteGKT\GSBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Composition
 *
 * @ORM\Table(name="GKTComposition")
 * @ORM\Entity(repositoryClass="SiteGKT\GSBBundle\Entity\CompositionRepository")
 */
class Composition
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
     * @ORM\Column(name="COM_Libelle", type="string", length=255)
     */
    private $COM_Libelle;


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
     * Set COM_Libelle
     *
     * @param string $COM_Libelle
     * @return Composition
     */
    public function setCOMLibelle($COM_Libelle)
    {
        $this->COM_Libelle = $COM_Libelle;
    
        return $this;
    }

    /**
     * Get COM_Libelle
     *
     * @return string 
     */
    public function getCOMLibelle()
    {
        return $this->COM_Libelle;
    }
}
