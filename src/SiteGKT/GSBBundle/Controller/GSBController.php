<?php
	//On se place dans le namespace des contrôleurs de notre bundle
    namespace SiteGKT\GSBBundle\Controller;
	//Notre contrôleur hérite de ce contrôleur de base, il faut donc le charger grâce au use.
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	//Notre contrôleur va utiliser l'objet Response, il faut donc le charger grâce au use.
    use Symfony\Component\HttpFoundation\Response;
	use SiteGKT\GSBBundle\Entity\Medicament;
	use SiteGKT\GSBBundle\Entity\Famille;
	use SiteGKT\GSBBundle\Form\FamilleType;
	use SiteGKT\GSBBundle\Form\FamilleModificationType;
	use SiteGKT\GSBBundle\Form\CompositionType;
	use SiteGKT\GSBBundle\Form\CompositionModificationType;
	use SiteGKT\GSBBundle\Entity\Composition;

	
	//Le nom de notre contrôleur respecte le nom du fichier pour que l'autoload fonctionne.
    class GSBController extends Controller
    {
		//Définition de la méthode indexAction() (Le suffixe Action est obligatoire)
        public function indexAction()
		//Accès à la liste des articles
		{
			
			
			return $this->render ('SiteGKTGSBBundle:GSB:index.html.twig');
        }
        
		
		
		

		public function VoirListeMedicamentAction()
		{
			//Récupération de l'EntityManager
			$em =$this->getDoctrine()->getManager();
			
			
			/* //Récupération des articles qui appartienent à la catégorie Tutoriel
			$articles = $em->getRepository('SiteTCHBlogBundle:Article')->getAvecCategorie (array('Categorie'=>'bla')); */
			
			$Medicaments = $em->getRepository('SiteGKTGSBBundle:Medicament')->findAll();
			
			return $this->render ('SiteGKTGSBBundle:GSB:ListeMedicament.html.twig', array('Medicaments'=>$Medicaments));
		}
		
		public function VoirListeCompositionAction()
		{
			//Récupération de l'EntityManager
			$em =$this->getDoctrine()->getManager();
			
			
			/* //Récupération des articles qui appartienent à la catégorie Tutoriel
			$articles = $em->getRepository('SiteTCHBlogBundle:Article')->getAvecCategorie (array('Categorie'=>'bla')); */
			
			$Compositions = $em->getRepository('SiteGKTGSBBundle:Composition')->findAll();
			
			return $this->render ('SiteGKTGSBBundle:GSB:ListeComposition.html.twig', array('Compositions'=>$Compositions));
		}
		
		public function VoirListeFamilleAction()
		{
			//Récupération de l'EntityManager
			$em =$this->getDoctrine()->getManager();
			
			
			/* //Récupération des articles qui appartienent à la catégorie Tutoriel
			$articles = $em->getRepository('SiteTCHBlogBundle:Article')->getAvecCategorie (array('Categorie'=>'bla')); */
			
			$Familles = $em->getRepository('SiteGKTGSBBundle:Famille')->findAll();
			
			return $this->render ('SiteGKTGSBBundle:GSB:ListeFamille.html.twig', array('Familles'=>$Familles));
		}

		

		public function ajouterFamilleAction()
		{
			//Ajout d'un article
			
			
			//On crée un objet Article
			$Famille = new Famille();
			$form=$this->createForm(new FamilleType,$Famille);
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
					$em->persist($Famille);
					$em->flush();
					//On redirige vers la page de visualisation de l'article nouvellement créé
					return $this->redirect($this->generateUrl('SiteGKTGSB_accueil'));
				}
			}
			//A ce stade : 
			//-Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
			//-Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
			return $this->render('SiteGKTGSBBundle:GSB:ajouterFamille.html.twig',array('form'=>$form->createView() ));
		}
			
		public function ModifierFamilleAction($id)
		//Modification d'un article	
		{
			//On récupère l'EntityManager
			$Famille = $this->getDoctrine()->getManager()->getRepository('SiteGKTGSBBundle:Famille')->find($id);
			$form=$this->createForm(new FamilleModificationType(),$Famille);
			$request=$this->getRequest();
			if ($request->getMethod()=='POST')
			{
				$form->bind($request);
				if($form->isValid())
				{
					//On enregistre l'article
					$em = $this->getDoctrine()->getManager();
					$em->persist($Famille);
					$em->flush();
					//On définit un message flash
					$this->get('session')->getFlashBag()->add('info','Article bien modifié');
					return $this->redirect($this->generateUrl('SiteGKTGSB_accueil'));
				}
			}
			return $this->render('SiteGKTGSBBundle:GSB:modifierFamille.html.twig',array('form'=>$form->createView(),'Famille'=>$Famille));
			
        }	
        		
		public function modifierAction($id)
		//Modification d'un article	
		{
			//On récupère l'EntityManager
			$article = $this->getDoctrine()->getManager()->getRepository('SiteGKTGSBBundle:Article')->find($id);
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
					return $this->redirect($this->generateUrl('SiteGKTGSB_voir',array('id'=>$article->getId())));
				}
			}
			return $this->render('SiteGKTGSBBundle:GSB:modifier.html.twig',array('form'=>$form->createView(),'article'=>$article));
			
        }
		
		public function SupprimerFamilleAction($id)
		//Suppression d'un article
		{
			//On crée un formulaire vide, qui ne contiendra que le champ CSRF
			//Cela permet de protéger la suppression d'article contre une faille permettant de le faire
			$form = $this->createFormBuilder()->getForm();
			$request=$this->getRequest();
			$em = $this->getDoctrine()->getManager();
			$Famille = $em->getRepository('SiteGKTGSBBundle:Famille')->find($id);
			if($request ->getMethod()=='POST')
			{
				$form->bind($request);
				if($form->isValid())
				{
					if($Famille===null)
					{
						throw $this->createNotFoundException('Famille[id='.$id.'] inexistant');
					}
					$em->remove($Famille);
					$em->flush();
					return $this->redirect($this->generateUrl('SiteGKTGSB_accueil'));
				}
			}
			//Si la requête est en GET, on affiche une page de confirmation avant de supprimer 
			return $this->render('SiteGKTGSBBundle:GSB:SupprimerFamille.html.twig',array('Famille'=>$Famille,'form'=>$form->createView()));
        }
		
		public function ajouterCompositionAction()
		{
			//Ajout d'un article
			
			
			//On crée un objet Article
			$Composition = new Composition();
			$form=$this->createForm(new CompositionType,$Composition);
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
					$em->persist($Composition);
					$em->flush();
					//On redirige vers la page de visualisation de l'article nouvellement créé
					return $this->redirect($this->generateUrl('SiteGKTGSB_accueil'));
				}
			}
			//A ce stade : 
			//-Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
			//-Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
			return $this->render('SiteGKTGSBBundle:GSB:ajouterComposition.html.twig',array('form'=>$form->createView() ));
		}
			
		public function ModifierCompositionAction($id)
		//Modification d'un article	
		{
			//On récupère l'EntityManager
			$Composition = $this->getDoctrine()->getManager()->getRepository('SiteGKTGSBBundle:Composition')->find($id);
			$form=$this->createForm(new CompositionModificationType(),$Composition);
			$request=$this->getRequest();
			if ($request->getMethod()=='POST')
			{
				$form->bind($request);
				if($form->isValid())
				{
					//On enregistre l'article
					$em = $this->getDoctrine()->getManager();
					$em->persist($Composition);
					$em->flush();
					//On définit un message flash
					$this->get('session')->getFlashBag()->add('info','Composition bien modifié');
					return $this->redirect($this->generateUrl('SiteGKTGSB_accueil'));
				}
			}
			return $this->render('SiteGKTGSBBundle:GSB:modifierComposition.html.twig',array('form'=>$form->createView(),'Composition'=>$Composition));
			
        }

		public function SupprimerCompositionAction($id)
		//Suppression d'un article
		{
			//On crée un formulaire vide, qui ne contiendra que le champ CSRF
			//Cela permet de protéger la suppression d'article contre une faille permettant de le faire
			$form = $this->createFormBuilder()->getForm();
			$request=$this->getRequest();
			$em = $this->getDoctrine()->getManager();
			$Composition = $em->getRepository('SiteGKTGSBBundle:Composition')->find($id);
			if($request ->getMethod()=='POST')
			{
				$form->bind($request);
				if($form->isValid())
				{
					if($Composition===null)
					{
						throw $this->createNotFoundException('Composition[id='.$id.'] inexistant');
					}
					$em->remove($Composition);
					$em->flush();
					return $this->redirect($this->generateUrl('SiteGKTGSB_accueil'));
				}
			}
			//Si la requête est en GET, on affiche une page de confirmation avant de supprimer 
			return $this->render('SiteGKTGSBBundle:GSB:SupprimerComposition.html.twig',array('Composition'=>$Composition,'form'=>$form->createView()));
        }		
		
		public function menuAction($nombre)
		{
			//$nombre est l'argument que l'on a transmis via le render() depuis la vue
			//On définit la liste des derniers articles "en dure". Elle sera bien entendu ensuite récupérée depuis la BDD !
			
			//On récupère l'EntityManager
			$em=$this->getDoctrine()->getManager();
			
			//On récupère l'entité correspondant à l'id $id
			$liste = $em->getRepository('SiteGKTGSBBundle:Article')->findBy(array(),array('date'=>'desc'),3,0);
			return $this->render('SiteGKTGSBBundle:GSB:menu.html.twig',array('liste_articles'=>$liste));
        }

        public function SupprimerMedicamentAction($id)
		//Suppression d'un article
		{
			//On crée un formulaire vide, qui ne contiendra que le champ CSRF
			//Cela permet de protéger la suppression d'article contre une faille permettant de le faire
			$form = $this->createFormBuilder()->getForm();
			$request=$this->getRequest();
			$em = $this->getDoctrine()->getManager();
			$Medicament = $em->getRepository('SiteGKTGSBBundle:Medicament')->find($id);
			if($request ->getMethod()=='POST')
			{
				$form->bind($request);
				if($form->isValid())
				{
					if($Medicament===null)
					{
						throw $this->createNotFoundException('Medicament[id='.$id.'] inexistant');
					}
					$em->remove($Medicament);
					$em->flush();
					return $this->redirect($this->generateUrl('SiteGKTGSB_accueil'));
				}
			}
			//Si la requête est en GET, on affiche une page de confirmation avant de supprimer 
			return $this->render('SiteGKTGSBBundle:GSB:SupprimerMedicament.html.twig',array('Medicament'=>$Medicament,'form'=>$form->createView()));
        }
    }
?>
