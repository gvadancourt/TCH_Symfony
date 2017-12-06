<?php

namespace SiteGKT\GSBBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SiteGKTGSBBundle:Default:index.html.twig', array('name' => $name));
    }
}
