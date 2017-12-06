<?php

namespace SiteTCH\BlogAbonneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SiteTCH\BlogAbonneBundle\Entity\Abonne;
use SiteTCH\BlogAbonneBundle\Entity\Photo;

class BlogAbonneController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SiteTCHBlogAbonneBundle:Default:index.html.twig', array('name' => $name));
    }
	
	public function abonneAction()
		//Accès à la liste des abonnés
		{
			//Récupération de l'EntityManager
			$em =$this->getDoctrine()->getManager();
			//Récupération de l'entité correspondant à l'id $id
			$abonnes = $em->getRepository('SiteTCHBlogAbonneBundle:Abonne')->findAll();
			
			return $this->render ('SiteTCHBlogAbonneBundle:Blog:abonne.html.twig',array('liste_abonnes'=>$abonnes));
        }
		
		
		
		public function abonnedetailsAction($id)
		//Visualisation d'un article
		{
			//Récupération de l'EntityManager
			$em =$this->getDoctrine()->getManager();
			//Récupération de l'entité correspondant à l'id $id
			$abonne = $em->getRepository('SiteTCHBlogAbonneBundle:Abonne')->find($id);

			 return $this->render('SiteTCHBlogAbonneBundle:Blog:abonnedetails.html.twig',array('abonne'=>$abonne)); 

        }
}
