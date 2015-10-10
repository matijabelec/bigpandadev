<?php

namespace BigPandaDev\MainBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OffersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
//        $choiceList = new ObjectChoiceList($products, 'title', array(), null, 'id');
        
//        array(
//            'available' => 1,
//            'not-available' => 2,
//            'soon' => 3,
//            'hidden' => 0
//        );
        
        $offer_statuses = array(
            1 => 'Available',
            2 => 'Not-available',
            3 => 'Soon',
            4 => 'Hidden'
        );
        
        $builder
            ->add('id', 'text', array(
                'disabled' => true,
                'attr' => array(
                    'readonly' => true
                )
            ))
            ->add('name', 'text', array())
            ->add('status', 'choice', array(
                'choices' => $offer_statuses,
                'multiple' => false,
                'required' => false,
                'translation_domain' => 'BigPandaDevMainBundle'
            ))
            ->add('price', 'money', array(
                'required' => false,
                'currency' => false //'HRK'
            ))
            ->add('description', 'textarea', array(
                'required' => false,
                'attr' => array(
                    'rows' => 6
                )
            ))
            ->add('job_type', 'entity', array(
                'required' => false,
                'class' => 'BigPandaDevMainBundle:JobTypes',
                'label' => 'Job type'
            ))
//                add('myinput', 'entity', array(
//                    'class' => 'myBundle:Rule',
//                    'property' => 'childEntity.name',
//                    'label' => 'Filas Permitidas',
//                    'expanded' => false,
//                    'multiple' => true,
//                    'choices' => $this->getDoctrine()
//                            ->getRepository('MyBundle:Rule')
//                            ->findAll(),
//                    'required' => true,
//                ))->getForm();
        ;
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BigPandaDev\MainBundle\Entity\Offers',
        ));
    }
    
    public function getName()
    {
        return 'offers';
    }
}
