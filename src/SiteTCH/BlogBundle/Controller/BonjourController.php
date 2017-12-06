<?php
	//On se palce dans le namespace des contrôleurs de notre bundle
    namespace SiteTCH\BlogBundle\Controller;
	//Notre contrôleur hérite de ce contrôleur de base, il faut donc le charger grâce au use.
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	//Notre contrôleur va utiliser l'objet Response, il faut donc le charger grâce au use.
    use Symfony\Component\HttpFoundation\Response;
	
	//Le nom de notre contrôleur respecte le nom du fichier pour que l'autoload fonctionne.
    class BonjourController extends Controller
    {
		//Définition de la méthode indexAction() (Le suffixe Action est obligatoire)
        public function indexAction()
		{
			//On crée une réponse toute simple. L'argument de l'objet Response est le contenu de la page que vous envoyez au visiteur, ici "Hello World !".
			//Puis on retourne cet objet.
			return new Response("Bonjour les BTS SIO");
        }
    }
?>
