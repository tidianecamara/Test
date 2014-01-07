<?php

namespace Sdz\Bundle\UserBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);

        // add your custom field
        $builder->add('formation');

        $builder->add('roles', 'collection', array(
            'type' => 'choice',
            'options' => array(
                'choices' => array(
                    'role_admin' => 'ROLE_ADMIN',
                    'role_user' => 'ROLE_USER',
                ),
        ))); 
        
        
      
    }

    public function getName() {
        return 'sdz_user_registration';
    }

}
