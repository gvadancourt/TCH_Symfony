<?php

namespace SiteTCH\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Article
 *
 * @ORM\Table(name="TCH_Article")
 * @ORM\Entity(repositoryClass="SiteTCH\BlogBundle\Entity\ArticleRepository")
 * @ORM\HasLifecycleCallbacks()
 */
 
class Article
{
	/**
	* @ORM\OneToOne(targetEntity="SiteTCH\BlogBundle\Entity\Image",cascade={"persist","remove"}) 
	* @Assert\Valid()
	*/
	private $image;
	
	/**
	* @ORM\ManyToMany(targetEntity ="SiteTCH\BlogBundle\Entity\Categorie",cascade={"persist"})
	*/
	private $categories;
	
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
	 * @Assert\DateTime()
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
	 * @Assert\Length(min=10)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255)
	 * @Assert\Length(min=2)
     */
    private $auteur;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
	 * @Assert\NotBlank()
     */
    private $contenu;

	/**
     * @var boolean
     *
     * @ORM\Column(name="publication", type="boolean")
     */
	private $publication;
	
	/**
     * @ORM\OneToMany(targetEntity="SiteTCH\BlogBundle\Entity\Commentaire",mappedBy="article")
     */	
	private $commentaires;
	
	/**
     * @var \DateTime
     * 
     * @ORM\Column(name="dateModification", type="datetime", nullable=true)
     */
    private $dateModification;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="nbCommentaires", type="integer")
     */
    private $nbCommentaires;
	
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
     * Set date
     *
     * @param \DateTime $date
     * @return Article
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Article
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     * @return Article
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    
        return $this;
    }

    /**
     * Get auteur
     *
     * @return string 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Article
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    
        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }
	
	/**
     * Constructeur
     *
     * 
     */
	public function __construct()
	{
		$this->date = new\Datetime();
		$this->publication = true;
		$this->categories = new \Doctrine\Common\Collections\ArrayCollection();
		$this->nbCommentaires = 0;
	}

    /**
     * Set publication
     *
     * @param boolean $publication
     * @return Article
     */
    public function setPublication($publication)
    {
        $this->publication = $publication;
    
        return $this;
    }

    /**
     * Get publication
     *
     * @return \boolean 
     */
    public function getPublication()
    {
        return $this->publication;
    }

    /**
     * Set image
     *
     * @param \SiteTCH\BlogBundle\Entity\Image $image
     * @return Article
     */
    public function setImage(\SiteTCH\BlogBundle\Entity\Image $image = null)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return \SiteTCH\BlogBundle\Entity\Image 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Add categories
     *
     * @param \SiteTCH\BlogBundle\Entity\Categorie $categories
     * @return Article
     */
    public function addCategorie(\SiteTCH\BlogBundle\Entity\Categorie $categories)
    {
        $this->categories[] = $categories;
    
        return $this;
    }

    /**
     * Remove categories
     *
     * @param \SiteTCH\BlogBundle\Entity\Categorie $categories
     */
    public function removeCategorie(\SiteTCH\BlogBundle\Entity\Categorie $categories)
    {
        $this->categories->removeElement($categories);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Add commentaires
     *
     * @param \SiteTCH\BlogBundle\Entity\Commentaire $commentaires
     * @return Article
     */
    public function addCommentaire(\SiteTCH\BlogBundle\Entity\Commentaire $commentaires)
    {
        $this->commentaires[] = $commentaires;
		$commentaires->setArticle($this);
    
        return $this;
    }

    /**
     * Remove commentaires
     *
     * @param \SiteTCH\BlogBundle\Entity\Commentaire $commentaires
     */
    public function removeCommentaire(\SiteTCH\BlogBundle\Entity\Commentaire $commentaires)
    {
        $this->commentaires->removeElement($commentaires);
    }

    /**
     * Get commentaires
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }

    /**
     * Set dateModification
     *
     * @param \DateTime $dateModification
     * @return Article
     */
    public function setDateModification($dateModification)
    {
        $this->dateModification = $dateModification;
    
        return $this;
    }

    /**
     * Get dateModification
     *
     * @return \DateTime 
     */
    public function getDateModification()
    {
        return $this->dateModification;
    }
	
	/**
     * majDate :  Met à jour automatiquement la date de modification d'un article
     *	@ORM\PreUpdate
     * 
     */
	public function majDate()
    {
        return ($this->setDateModification(new\Datetime()));
    }

    /**
     * Set nbCommentaires
     *
     * @param integer $nbCommentaires
     * @return Article
     */
    public function setNbCommentaires($nbCommentaires)
    {
        $this->nbCommentaires = $nbCommentaires;
    
        return $this;
    }

    /**
     * Get nbCommentaires
     *
     * @return integer 
     */
    public function getNbCommentaires()
    {
        return $this->nbCommentaires;
    }
}