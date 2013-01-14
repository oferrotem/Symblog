<?php

namespace Blogger\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
//use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentType extends AbstractType
{
    //public function buildForm(FormBuilderInterface $builder, array $options)
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('comment')
        ;
    }

    //public function setDefaultOptions(OptionsResolverInterface $resolver)
    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Blogger\BlogBundle\Entity\Comment'
        ));
    }

    public function getName()
    {
        return 'blogger_blogbundle_commenttype';
    }
}