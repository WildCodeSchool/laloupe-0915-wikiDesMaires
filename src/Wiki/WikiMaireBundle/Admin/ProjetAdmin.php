<?php
/**
 * Created by PhpStorm.
 * User: mahamadou
 * Date: 16/11/15
 * Time: 23:03
 */
// src/Wiki\WikiMaireBundle/Admin/ProjetAdmin.php
namespace Wiki\WikiMaireBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ProjetAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('description')
            ->add('dateR')
            ->add('but')
            ->add('subvention')
            ->add('difficulte')
            ->add('conseils')
            ->add('cout')
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('description')
            ->add('dateR')
            ->add('but')
            ->add('subvention')
            ->add('difficulte')
            ->add('conseils')
            ->add('cout')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('description')
            ->add('dateR')
            ->add('but')
            ->add('subvention')
            ->add('difficulte')
            ->add('conseils')
            ->add('cout')
        ;
    }
}