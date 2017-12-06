<?php

namespace SiteTCH\BlogAbonneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photo
 *
 * @ORM\Table(name="TCH_Photo")
 * @ORM\Entity(repositoryClass="SiteTCH\BlogAbonneBundle\Entity\PhotoRepository")
 */
class Photo
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
     * @ORM\Column(name="URL", type="string", length=255)
     */
    private $uRL;


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
     * Set uRL
     *
     * @param string $uRL
     * @return Photo
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
    
        return $this;
    }

    /**
     * Get uRL
     *
     * @return string 
     */
    public function getURL()
    {
        return $this->uRL;
    }
}
