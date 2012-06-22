<?php 

namespace Buntsuu\MainBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class MessageType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
	       $builder
		   ->add('message');
    }

    public function getName()
    {
         return 'buntsuu_mainbundle_messagetype';
    }
}
