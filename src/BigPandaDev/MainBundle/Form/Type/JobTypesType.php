<?php

namespace BigPandaDev\MainBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class JobTypesType extends AbstractType
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
            ->add('description', 'textarea', array(
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
            ->add('price', 'text', array(
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control'
                ),
                'label' => 'Price (kn)'
            ))
        ;
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BigPandaDev\MainBundle\Entity\JobTypes',
        ));
    }
    
    public function getName()
    {
        return 'job_types';
    }
}
