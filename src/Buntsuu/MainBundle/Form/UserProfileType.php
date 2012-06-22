<?php 

namespace Buntsuu\MainBundle\Form;
use Symfony\Component\Form\AbstractType;
use Buntsuu\MainBundle\Entity\User;
use Symfony\Component\Form\FormBuilder;

class UserProfileType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
			->add('gender', 'choice', array(
    			'choices'   => array('0' => 'Male', '1' => 'Female'),
    			'required'  => false))
			->add('facebook')
			->add('skype')
			->add('birthdate','birthday')
        ;
    }

    public function getName()
    {
         return 'buntsuu_mainbundle_userprofiletype';
    }
}
