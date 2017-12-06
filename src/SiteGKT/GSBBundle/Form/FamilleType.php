<?php

namespace SiteGKT\GSBBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;

class FamilleType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('FAM_Libelle','text');
            //On récupère le factory (usine)
            $factory=$builder->getFormFactory();
            
            //On ajoute une fonction qui va écouter l'évènement PRE_SET_DATA
            $builder->addEventListener(FormEvents::PRE_SET_DATA, //Ici, on définit l'évènement qui nous intéresse 
            function(FormEvent $event) use($factory){ //Ici, on définit une fonction qui sera exécutée lors de l'évènement
                $Famille = $event->getData();
                //Cette condition est importante, on en reparle plus loin
                if(null===$Famille)
                {
                    return; //On sort de la fonction lorsque $Famille vaut null
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
            'data_class' => 'SiteGKT\GSBBundle\Entity\Famille'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sitegkt_gsbbundle_famille';
    }
}
