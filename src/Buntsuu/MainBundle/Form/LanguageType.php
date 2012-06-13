<?php 

namespace Buntsuu\MainBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class LanguageType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
	       $builder
	       ->add('name', 'entity',
           							array ('label' => 'Language',
                       				'class' => 'BuntsuuMainBundle:Language',
                       				'property' => 'name',
                       				'required' => true))
	       
	       ->add('name', 'entity',
	       		array ('label' => 'Language',
	       				'class' => 'BuntsuuMainBundle:Language',
	       				'property' => 'name',
	       				'required' => true));
    }

    public function getName()
    {
         return 'buntsuu_mainbundle_usertype';
    }
}
