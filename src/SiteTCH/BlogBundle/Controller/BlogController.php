<?php
	//On se palce dans le namespace des contrôleurs de notre bundle
    namespace SiteTCH\BlogBundle\Controller;
	//Notre contrôleur hérite de ce contrôleur de base, il faut donc le charger grâce au use.
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	//Notre contrôleur va utiliser l'objet Response, il faut donc le charger grâce au use.
    use Symfony\Component\HttpFoundation\Response;
	use SiteTCH\BlogBundle\Entity\Article;
	use SiteTCH\BlogBundle\Entity\Image;
	use SiteTCH\BlogBundle\Entity\Commentaire;
	use SiteTCH\BlogBundle\Entity\Categorie;
	use SiteTCH\BlogBundle\Entity\ArticleCompetence;
	use SiteTCH\BlogBundle\Form\ArticleType;
	use SiteTCH\BlogBundle\Form\ArticleModificationType;
	
	//Le nom de notre contrôleur respecte le nom du fichier pour que l'autoload fonctionne.
    class BlogController extends Controller
    {
		//Définition de la méthode indexAction() (Le suffixe Action est obligatoire)
        public function indexAction()
		//Accès à la liste des articles
		{
			$user=$this->getUser();
			if(null===$user)
			{
				//Ici, l'utilisateur est anonyme ou l'URL n'est pas derrière un pare-feu
			}
			else
			{
				
			}
			//Récupération de l'EntityManager
			$em =$this->getDoctrine()->getManager();
			
			
			/* //Récupération des articles qui appartienent à la catégorie Tutoriel
			$articles = $em->getRepository('SiteTCHBlogBundle:Article')->getAvecCategorie (array('Categorie'=>'bla')); */
			
			$articles = $em->getRepository('SiteTCHBlogBundle:Article')->findAll();
			
			return $this->render ('SiteTCHBlogBundle:Blog:index.html.twig', array('articles'=>$articles));
        }
        
		
		public function voirAction($id)
		//Visualisation d'un article
		{
			//Récupération de l'EntityManager
			$em =$this->getDoctrine()->getManager();
			//Récupération de l'entité correspondant à l'id $id
			$article = $em->getRepository('SiteTCHBlogBundle:Article')->find($id);
			// $article est donc une instance de SiteTCH\BlogBundle\Entity\Article
			//Ou null si aucun article n'a été trouvé avec l'id $id
			if($article ===null)
			{
				throw $this->createNotFoundException('Article[id='.$id.'] inexistant.');
			}
			//Récupération de la liste des commentaires
			$liste_commentaires = $em->getRepository('SiteTCHBlogBundle:Commentaire')->findByArticle($article->getId());
			
			
			//Récupération de la liste des catégories
			$liste_categories = $em->getRepository('SiteTCHBlogBundle:Article')->findAll();  
			
			//Récupération des compétences de l'article
			$liste_articleCompetence =$em->getRepository('SiteTCHBlogBundle:ArticleCompetence')->findByArticle($article->getId());
			
			
			
			 return $this->render('SiteTCHBlogBundle:Blog:voir.html.twig',array('article'=>$article,'liste_commentaires'=>$liste_commentaires,'categories'=>$liste_categories,'Listes_competences'=>$liste_articleCompetence)); 
			
			
        }
		
		
		public function ajouterAction()
		{
			//Ajout d'un article
			
			
			//On crée un objet Article
			$article = new Article();
			$form=$this->createForm(new ArticleType,$article);
			//On récupère la requête 
			$request=$this->get('request');
			//On vérifie qu'elle est de type POST
			if($request->getMethod() =='POST')
			{
				//On fait le lien Requête <->Formulaire
				//A partir de maintenant, la variable $article contient les valeurs entrées dans le formulaire par le visiteur
				$form->bind($request);
				//On vérifie que les valeurs entrées sont correctes (La validation des objets sera vu ultérieurement)
				if($form->isValid())
				{
					//On enregistre notre objet $article dans la base de données
					$em = $this->getDoctrine()->getManager();
					$em->persist($article);
					$em->flush();
					//On redirige vers la page de visualisation de l'article nouvellement créé
					return $this->redirect($this->generateUrl('SiteTCHblog_accueil'));
				}
			}
			//A ce stade : 
			//-Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
			//-Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
			return $this->render('SiteTCHBlogBundle:Blog:ajouter.html.twig',array('form'=>$form->createView() ));
			
			
			
		}
			
        		
		public function modifierAction($id)
		//Modification d'un article	
		{
			//On récupère l'EntityManager
			$article = $this->getDoctrine()->getManager()->getRepository('SiteTCHBlogBundle:Article')->find($id);
			$form=$this->createForm(new ArticleModificationType(),$article);
			$request=$this->getRequest();
			if ($request->getMethod()=='POST')
			{
				$form->bind($request);
				if($form->isValid())
				{
					//On enregistre l'article
					$em->$this->getDoctrine()->getManager();
					$em->persist($article);
					$em->flush();
					//On définit un message flash
					$this->get('session')->getFlashBag()->add('info','Article bien modifié');
					return $this->redirect($this->generateUrl('SiteTCHblog_voir',array('id'=>$article->getId())));
				}
			}
			return $this->render('SiteTCHBlogBundle:Blog:modifier.html.twig',array('form'=>$form->createView(),'article'=>$article));
			
        }
		
		public function supprimerAction($id)
		//Suppression d'un article
		{
			//On crée un formulaire vide, qui ne contiendra que le champ CSRF
			//Cela permet de protéger la suppression d'article contre une faille permettant de le faire
			$form = $this->createFormBuilder()->getForm();
			$request=$this->getRequest();
			$em = $this->getDoctrine()->getManager();
			$article = $em->getRepository('SiteTCHBlogBundle:Article')->find($id);
			if($request ->getMethod()=='POST')
			{
				$form->bind($request);
				if($form->isValid())
				{
					if($article===null)
					{
						throw $this->createNotFoundException('Article[id='.$id.'] inexistant');
					}
					$em->remove($article);
					$em->flush();
					return $this->redirect($this->generateUrl('SiteTCHblog_accueil'));
				}
			}
			//Si la requête est en GET, on affiche une page de confirmation avant de supprimer 
			return $this->render('SiteTCHBlogBundle:Blog:supprimer.html.twig',array('article'=>$article,'form'=>$form->createView()));
        }
		
		public function menuAction($nombre)
		{
			//$nombre est l'argument que l'on a transmis via le render() depuis la vue
			//On définit la liste des derniers articles "en dure". Elle sera bien entendu ensuite récupérée depuis la BDD !
			
			//On récupère l'EntityManager
			$em=$this->getDoctrine()->getManager();
			
			//On récupère l'entité correspondant à l'id $id
			$liste = $em->getRepository('SiteTCHBlogBundle:Article')->findBy(array(),array('date'=>'desc'),3,0);
			return $this->render('SiteTCHBlogBundle:Blog:menu.html.twig',array('liste_articles'=>$liste));
        }
    }
?>