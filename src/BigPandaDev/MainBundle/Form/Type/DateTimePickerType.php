<?php

namespace BigPandaDev\MainBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DateTimePickerType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $dateOptions = $builder->get('date')->getOptions();
        
        $builder->remove('date')
                ->add('date', 'datePicker', $dateOptions);
    }
 
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'datetime';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'date_widget' => 'single_text',
            'time_widget' => 'choice'
        ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'dateTimePicker';
    }
}