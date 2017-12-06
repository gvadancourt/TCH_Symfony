<?php

namespace SiteGKT\GSBBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
class CompositionType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('COM_Libelle','text')
        ;
		$factory=$builder->getFormFactory();
		$builder->addEventListener(FormEvents::PRE_SET_DATA, function(FormEvent $event) use($factory)
		{
			$composition=$event->getData();
			//Cette condition est importante, on en reparle plus loin
			if (null===$composition)
			{
				return; //On sort de la fonction lorsque $article vaut null
			}
		}
		);
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SiteGKT\GSBBundle\Entity\Composition'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sitegkt_gsbbundle_composition';
    }
}
