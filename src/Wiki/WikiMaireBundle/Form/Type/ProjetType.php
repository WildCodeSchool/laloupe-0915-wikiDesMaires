<?php
/**
 * Created by PhpStorm.
 * User: mahamadou
 * Date: 17/11/15
 * Time: 17:17
 */
// src/GedBundle/Form/Type/DocumentType.php
namespace Wiki\WikiMaireBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
class ProjetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomprojet', 'text', array('label' => 'Nom du Projet'))
            ->add('commune', 'text', array('label' => 'Commune de Réalisation'))
            ->add('entrepreneur', 'text', array('label' => 'Entrepreneur'))
            ->add('cout', 'text', array('label' => 'Coût du Projet'))
            ->add('date', 'date', array('label' => 'Date de Réalisation'))
            ->add('description', 'textarea', array('label' => 'Description'))
            ->add('difficulte', 'textarea', array('label' => 'Difficulté'))

            ->add('save', 'submit', array('label' => 'Envoyez'))
        ;
    }
    public function getName()
    {
        return 'Projet';
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Wiki\WikiMaireBundle\Entity\Projet',
        ));
    }
}