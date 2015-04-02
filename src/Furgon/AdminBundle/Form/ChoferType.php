<?php

namespace Furgon\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ChoferType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('apPaterno')
            ->add('apMaterno')
            ->add('rut')
            ->add('dv')
            ->add('telefono')
            ->add('celular')
            ->add('mail')
            ->add('direccion')
            ->add('furgon');
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Furgon\AdminBundle\Entity\Chofer'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'furgon_adminbundle_chofertype';
    }
}
