<?php 

namespace Buntsuu\MainBundle\Form;
use Symfony\Component\Form\AbstractType;
use Buntsuu\MainBundle\Entity\User;
use Symfony\Component\Form\FormBuilder;

class UserType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('password','repeated',array("type" => "password","first_name"=>"Password","second_name"=>"Confirm"))
            ->add('email','email')	
        ;
    }

    public function getName()
    {
         return 'buntsuu_mainbundle_usertype';
    }
}
