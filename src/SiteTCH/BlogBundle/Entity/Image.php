<?php

namespace SiteTCH\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Image
 *
 * @ORM\Table(name="TCH_Image")
 * @ORM\Entity(repositoryClass="SiteTCH\BlogBundle\Entity\ImageRepository")
 *
 * @ORM\HasLifecycleCallbacks()
 */
class Image
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
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255)
     */
    private $alt;

	/**
     * @var string
     *
     */
    private $fichier;
	
	/**
     * @var string
     *
     */
    private $nomfichiertemporaire;

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
     * Set url
     *
     * @param string $url
     * @return Image
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set alt
     *
     * @param string $alt
     * @return Image
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;
    
        return $this;
    }

    /**
     * Get alt
     *
     * @return string 
     */
    public function getAlt()
    {
        return $this->alt;
    }

    

    /**
     * Get fichier
     *
     * @return string 
     */
    public function getFichier()
    {
		return $this->fichier;
    }
	
	/**
	*
    */
    public function setFichier( UploadedFile $fichier)
    {
		$this->fichier=$fichier;
		//On vérifie si on a déjà un fichier pour cette entité
		if(null !== $this->url)
		{
			//On sauvegarde l'url du fichier pour le supprimer plus tard
			$this->nomfichiertemporaire=$this->url;
			//On réintialise les valeurs des attributs url et alt
			$this->url=null;
			$this->alt=null;
		}
    }
	
	/**
	* @ORM\PrePersist()
	* @ORM\PreUpdate()
	*/
	public function preUpload()
	//Génération des attributs $url et $alt
	{
		//Si jamais, il n'y a pas de fichier
		if(null===$this->fichier)
		{
			return;
		}
		//Le nom du fichier est son id, on doit juste stocker également son extension
		$this->url=$this->fichier->guessExtension();
		//Et on génère l'attribut alt de la balise <img>, à la valeur du nom du fichier sur le PC de l'internaute
		$this->alt=$this->fichier->getClientOriginalName();
	}
	
	/**
	*	@ORM\PostPersist()
	*	@ORM\PostUpdate()
	*/
	public function upload()
	//La méthode upload() s'occupe du déplacement effectif du fichier
	//Elle fait l'équivalent du move_uploaded_file() en PHP pur.
	//Elle s'occupe également de persister notre entité Image dans la base de données, en renseignant les deux attributs persistés, $url et $alt
	{
		//Si jamais il n'y a pas de fichier
		if(null===$this->fichier)
		{
			return;
		}
		//Si on avait un ancien fichier, on le supprime
		if(null!==$this->nomfichiertemporaire)
		{
			$oldFile = $this->getUploadRootDir().'/'.$this->id.'.'.$this->nomfichiertemporaire;
			if(file_exists($oldFile))
			{
				unlink($oldFile);
			}
		}
		//On déplace le fichier envoyé dans le répertoire de notre choix
		$this->fichier->move($this->getUploadRootDir(),$this->id.'.'.$this->url);
	}
	
	/**
	* @ORM\PreRemove()
	*/
	public function preRemoveUpload()
	{
		//On sauvegarde temporairement le nom du fichier, car il dépend de l'id
		$this->nomfichiertemporaire = $this->getUploadRootDir().'/'.$this->id.'.'.$this->url;
	}
	
	/**
	* @ORM\PostRemove()
	*/
	public function removeUpload()
	//Supprime effectivement le fichier grâce au nom enregistré
	{
		if(file_exists($this->nomfichiertemporaire))
		{
			//On supprime le fichier
			unlink($this->nomfichiertemporaire);
		}
	}
	/** 
	*/
	public function getUploadDir()
	{
		return 'uploads/img';
	}
	
	/** 
	*/
	public function getUploadRootDir()
	{
		return __DIR__.'/../../../../web/'.$this->getUploadDir();
	}

    /**
     * Set nomfichiertemporaire
     *
     * @param string $nomfichiertemporaire
     * @return Image
     */
    public function setNomfichiertemporaire($nomfichiertemporaire)
    {
        $this->nomfichiertemporaire = $nomfichiertemporaire;
    
        return $this;
    }

    /**
     * Get nomfichiertemporaire
     *
     * @return string 
     */
    public function getNomfichiertemporaire()
    {
        return $this->nomfichiertemporaire;
    }
	
	public function getCheminImage()
	{
		return $this->getUploadDir().'/'.$this->getId().'.'.$this->getUrl();
	}
}