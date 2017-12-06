<?php

namespace SiteTCH\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;

class ArticleType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('date','date')
			->add('titre','text')
			->add('contenu','textarea')
			->add('auteur','text')
			->add('publication','checkbox',array('required'=>false))
			->add('image',new ImageType())
			->add('categories','entity',array('class'=>'SiteTCHBlogBundle:Categorie','property'=>'nom','multiple'=>true));
			//On récupère le factory (usine)
			$factory=$builder->getFormFactory();
			
			//On ajoute une fonction qui va écouter l'évènement PRE_SET_DATA
			$builder->addEventListener(FormEvents::PRE_SET_DATA, //Ici, on définit l'évènement qui nous intéresse 
			function(FormEvent $event) use($factory){ //Ici, on définit une fonction qui sera exécutée lors de l'évènement
				$article = $event->getData();
				//Cette condition est importante, on en reparle plus loin
				if(null===$article)
				{
					return; //On sort de la fonction lorsque $article vaut null
				}
			}
			)
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SiteTCH\BlogBundle\Entity\Article'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sitetch_blogbundle_article';
    }
}
