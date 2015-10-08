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
                'attr' => array(
                    'readonly' => true
                )
            ))
            ->add('name', 'text', array())
            ->add('description', 'textarea', array())
            ->add('date_from', 'datePicker', array())
            ->add('date_to', 'datePicker', array())
            ->add('price', 'text', array(
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
