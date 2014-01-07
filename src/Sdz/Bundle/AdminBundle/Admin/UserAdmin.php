<?php

namespace Sdz\Bundle\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class UserAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('username', 'text', array('label' => 'Nom'))
            ->add('email', 'text', array('label' => 'Email'))
           
            ->add('enabled')
            
           ->add('roles', 'collection', array(
            'type' => 'choice',
            'options' => array(
                'choices' => array(
                    'role_admin' => 'ROLE_ADMIN',
                    'role_user' => 'ROLE_USER',
                ),
        )))
          
          
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('username')
            ->add('email')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('username')
            ->add('email')
            ->add('enabled')
        ;
    }
}