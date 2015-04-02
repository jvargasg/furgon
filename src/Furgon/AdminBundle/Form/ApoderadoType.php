<?php

namespace Furgon\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ApoderadoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombres')
            ->add('apPaterno')
            ->add('apMaterno')
            ->add('rut')
            ->add('dv')
            ->add('direccion')
            ->add('telefono')
            ->add('celular')
            ->add('mail');
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Furgon\AdminBundle\Entity\Apoderado'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'furgon_adminbundle_apoderadotype';
    }
}
