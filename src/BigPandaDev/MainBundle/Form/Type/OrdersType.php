<?php

namespace BigPandaDev\MainBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrdersType extends AbstractType
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
            ->add('name', 'text', array())
            ->add('date_created', 'datePicker', array())
            ->add('deadline', 'datePicker', array())
        ;
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BigPandaDev\MainBundle\Entity\Orders',
        ));
    }
    
    public function getName()
    {
        return 'orders';
    }
}
