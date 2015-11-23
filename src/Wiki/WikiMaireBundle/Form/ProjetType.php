<?php

namespace Wiki\WikiMaireBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProjetType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomprojet', 'text',array('label' => 'Nom du Projet'))
            ->add('description', 'textarea',array('label' => 'Description du Projet'))
            ->add('daterealisation',null, array('label' => 'Date de Réalisation'))
            ->add('difficulte', 'textarea',array('label' => 'Difficulté'))
            ->add('cout', 'number',array('label' => 'Coût de Réalisation'))
            ->add('tailleprojet', 'text',array('label' => 'Taille'))
            ->add('bassinPopulation', 'textarea',array('label' => 'Bassin de la population'))
            ->add('tags', 'text',array('label' => 'Tags'))
            ->add('user')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Wiki\WikiMaireBundle\Entity\Projet'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'wiki_wikimairebundle_projet';
    }
}
