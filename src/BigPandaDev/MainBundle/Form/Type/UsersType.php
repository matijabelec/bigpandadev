<?php

namespace BigPandaDev\MainBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UsersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id', 'text', array(
                'disabled' => true,
                'attr' => array(
                    'readonly' => true
                )
            ))
            ->add('username', 'text', array(
                'disabled' => true,
                'attr' => array(
                    'readonly' => true
                )
            ))
        ;
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BigPandaDev\MainBundle\Entity\Users',
        ));
    }
    
    public function getName()
    {
        return 'users';
    }
}
