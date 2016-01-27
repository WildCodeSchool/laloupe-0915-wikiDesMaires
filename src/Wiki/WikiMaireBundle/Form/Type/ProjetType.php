<?php

namespace Wiki\WikiMaireBundle\Form\Type;

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
            ->add('description', 'textarea',array('label' => 'Description'))
            ->add('daterealisation','date', array('label' => 'Année de Réalisation'))
            ->add('duree','text', array('label' => 'Durée'))
            ->add('gains', 'text' , array('label' => 'Gains pour la commune'))
            ->add('cout', 'number',array('label' => 'Coût de  la Réalisation'))
            ->add('file', 'file', array('label' => 'Photo du projet', 'required' => false))
            ->add('x', 'hidden')
            ->add('y', 'hidden')
            ->add('w', 'hidden')
            ->add('h', 'hidden')
            ->add('financement', null, array("label" => "Financement", "required" => false)

            );
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Wiki\WikiMaireBundle\Form\Model\ProjetModel'
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
