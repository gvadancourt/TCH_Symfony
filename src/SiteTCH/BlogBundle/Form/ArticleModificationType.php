<?php

namespace SiteTCH\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleModificationType extends ArticleType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		parent::buildForm($builder, $options);
        $builder
			->remove('date')
			->remove('dateModification')
			->add('titre','text')
			->add('contenu','textarea')
			->add('auteur','text')
			->add('publication','checkbox',array('required'=>false))
			->add('image',new ImageType())
			->add('categories','entity',array('class'=>'SiteTCHBlogBundle:Categorie','property'=>'nom','multiple'=>false,'expanded'=>false))
        ;
    }
    

    /**
     * @return string
     */
    public function getName()
    {
        return 'sitetch_blogbundle_Modficationarticle';
    }
}
