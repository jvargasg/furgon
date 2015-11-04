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
            ->add('nombres','text',array(
                'label' => 'Nombre'))
            ->add('apPaterno','text',array(
                'label' => 'Apellido paterno'))
            ->add('apMaterno','text',array(
                'label' => 'Apellido Materno'))
            ->add('rut','text',array(
                'label' => 'Rut'))
            ->add('dv','text',array(
                'label' => 'Dígito Verificador'))
            ->add('direccion','text',array(
                'label' => 'Dirección'))
            ->add('telefono','text',array(
                'label' => 'Telefono'))
            ->add('celular','text',array(
                'label' => 'Celular'))
            ->add('mail','email',array(
                'label' => 'E-mail'));
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
