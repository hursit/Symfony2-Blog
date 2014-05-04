<?php

namespace Hursit\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PostType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title','text',array('attr' => array(
                    'class' => 'form-control')))
            ->add('detail','textarea',array('attr' => array(
                    'class' => 'form-control')))
            ->add('category_id',null,array('attr' => array(
                    'class' => 'form-control')))
            ->add('Kaydet','submit',array('attr' => array(
                    'class' => 'btn btn-success')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Hursit\BlogBundle\Entity\Post'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hursit_blogbundle_post';
    }
}
