<?php

namespace Furgon\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NinioType extends AbstractType
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
            ->add('fechaNacimiento')
            ->add('colegio')
            ->add('celular')
            ->add('rut')
            ->add('dv')
            ->add('apoderado')
            //->add('contrato');
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Furgon\AdminBundle\Entity\Ninio'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'furgon_adminbundle_niniotype';
    }
}
