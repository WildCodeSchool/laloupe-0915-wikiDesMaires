<?php


namespace Wiki\WikiMaireBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                 ->add('name')
                 ->add('telephone')
                 ->add('mail')
                 ->add('message', 'textarea');
    }

    public function getName()
    {
        return 'contact';
    }
}