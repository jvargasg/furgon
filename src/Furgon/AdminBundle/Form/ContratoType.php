<?php

namespace Furgon\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContratoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fecha')
            ->add('apoderado')
            ->add('tipoContrato')
            ->add('ninio')
            ->add('furgon');
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Furgon\AdminBundle\Entity\Contrato'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'furgon_adminbundle_contratotype';
    }
}
