<?php

namespace SiteTCH\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="TCH_Commentaire")
 * @ORM\Entity(repositoryClass="SiteTCH\BlogBundle\Entity\CommentaireRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Commentaire
{
	/**
	* @ORM\ManyToOne(targetEntity="SiteTCH\BlogBundle\Entity\Article",inversedBy="commentaires")
	* @ORM\JoinColumn(nullable=false)
	*/
	private $article;
	
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
     * @ORM\Column(name="auteur", type="string", length=255)
     */
    private $auteur;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;


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
     * Set auteur
     *
     * @param string $auteur
     * @return Commentaire
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
     * @return Commentaire
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
     * Set date
     *
     * @param \DateTime $date
     * @return Commentaire
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
     * Set article
     *
     * @param \SiteTCH\BlogBundle\Entity\Article $article
     * @return Commentaire
     */
    public function setArticle(\SiteTCH\BlogBundle\Entity\Article $article)
    {
        $this->article = $article;
    
        return $this;
    }

    /**
     * Get article
     *
     * @return \SiteTCH\BlogBundle\Entity\Article 
     */
    public function getArticle()
    {
        return $this->article;
    }
	
	/**
     * Constructeur
     */
	public function __construct()
	{
		$this->date = new\Datetime();
	}
	
	/**
     * incrementation :  Augmente le nombre de commentaires d'un article
	 *
     * @ORM\PrePersist
     */
	public function incrementation()
    {
        $nbCommentaires=$this->getArticle()->getNbCommentaires();
		$this->getArticle()->setNbCommentaires($nbCommentaires +1);
    }
	
	/**
     * incrementation :  Augmente le nombre de commentaires d'un article
	 *
     * @ORM\PreRemove
     */
	public function decrementation()
    {
        $nbCommentaires=$this->getArticle()->getNbCommentaires();
		$this->getArticle()->setNbCommentaires($nbCommentaires -1);
    }
}