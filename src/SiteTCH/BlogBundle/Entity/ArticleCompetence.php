<?php

namespace SiteTCH\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticleCompetence
 *
 * @ORM\Table(name="TCH_ArticleCompetence")
 * @ORM\Entity(repositoryClass="SiteTCH\BlogBundle\Entity\ArticleCompetenceRepository")
 */
class ArticleCompetence
{
   /**
   * @ORM\Id
   * @ORM\ManyToOne(targetEntity="SiteTCH\BlogBundle\Entity\Article")
   */
	private $article ;


   /**
   * @ORM\Id
   * @ORM\ManyToOne(targetEntity ="SiteTCH\BlogBundle\Entity\Competence")
   */
   private $competence ;

   /**
     * @var string
     *
     * @ORM\Column(name="niveau", type="string", length=255)
     */
   private $niveau ; 

   
   
    /**
     * Set niveau
     *
     * @param string $niveau
     * @return ArticleCompetence
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;
    
        return $this;
    }

    /**
     * Get niveau
     *
     * @return string 
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set article
     *
     * @param \SiteTCH\BlogBundle\Entity\Article $article
     * @return ArticleCompetence
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
     * Set competence
     *
     * @param \SiteTCH\BlogBundle\Entity\Competence $competence
     * @return ArticleCompetence
     */
    public function setCompetence(\SiteTCH\BlogBundle\Entity\Competence $competence)
    {
        $this->competence = $competence;
    
        return $this;
    }

    /**
     * Get competence
     *
     * @return \SiteTCH\BlogBundle\Entity\Competence 
     */
    public function getCompetence()
    {
        return $this->competence;
    }
}