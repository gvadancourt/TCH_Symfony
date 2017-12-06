<?php

namespace SiteGKT\GSBBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FamilleModificationType extends FamilleType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder
           ->add('FAM_Libelle','text');
    }
    

    /**
     * @return string
     */
    public function getName()
    {
        return 'sitegkt_gsbbundle_Modficationfamille';
    }
}