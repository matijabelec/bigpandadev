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
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'readonly' => true,
                    'class' => 'form-control'
                )
            ))
            ->add('name', 'text', array(
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('date_created', 'datePicker', array(
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('deadline', 'datePicker', array(
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
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
