<?php 

namespace Buntsuu\MainBundle\Form;
use Symfony\Component\Form\AbstractType;
use Buntsuu\MainBundle\Entity\User;
use Symfony\Component\Form\FormBuilder;

class PreferenceType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('skype', 'checkbox', array(
    'label'     => 'Skype ?',
    'required'  => false))
            ->add('facebook', 'checkbox', array(
    'label'     => 'Facebook ?',
    'required'  => false))
            ->add('letter', 'checkbox', array(
    'label'     => 'Letter ?',
    'required'  => false))
            ->add('email', 'checkbox', array(
    'label'     => 'Email ?',
    'required'  => false))
            ->add('webcam', 'checkbox', array(
    'label'     => 'Webcam ?',
    'required'  => false))
            ->add('firstLanguageSpoken', 'entity',
            		array ('label' => 'Language Spoken n°1',
            				'class' => 'BuntsuuMainBundle:Language',
            				'property' => 'name',
            				'required' => false))
            				
        	->add('secondLanguageSpoken', 'entity',
       	 			array ('label' => 'Language Spoken n°2',
        				'class' => 'BuntsuuMainBundle:Language',
        				'property' => 'name',
        				'required' => false))
        				
       		 ->add('thirdLanguageSpoken', 'entity',
        			array ('label' => 'Language Spoken n°3',
        				'class' => 'BuntsuuMainBundle:Language',
        				'property' => 'name',
        				'required' => false))
       		 
       		 ->add('firstLanguageSearched', 'entity',
       		 		array ('label' => 'Language Searched n°1',
       		 				'class' => 'BuntsuuMainBundle:Language',
       		 				'property' => 'name',
       		 				'required' => false))
       		 
       		 ->add('secondLanguageSearched', 'entity',
       		 		array ('label' => 'Language Searched n°2',
       		 				'class' => 'BuntsuuMainBundle:Language',
       		 				'property' => 'name',
       		 				'required' => false))
       		 
       		 ->add('thirdLanguageSearched', 'entity',
       		 		array ('label' => 'Language Searched n°3',
       		 				'class' => 'BuntsuuMainBundle:Language',
       		 				'property' => 'name',
       		 				'required' => false));
                               
        ;
    }

    public function getName()
    {
         return 'buntsuu_mainbundle_preferencetype';
    }
}
