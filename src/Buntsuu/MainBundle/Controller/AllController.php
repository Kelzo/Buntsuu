<?php

namespace Buntsuu\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Buntsuu\MainBundle\Entity\User;
use Buntsuu\MainBundle\Form\UserType;
use Symfony\Component\Validator\Constraints\Language;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Buntsuu\MainBundle\Form\LanguageType;
use Buntsuu\MainBundle\Entity;



class AllController extends Controller
{
    
    public function indexAction(Request $request)
    {	
    	$em = $this->getDoctrine()->getEntityManager();
    	$languages = $em->getRepository('BuntsuuMainBundle:Language')->findAll();
    	$request = $this->getRequest();
    	$session = $request->getSession();
    	 
    	// get the login error if there is one
       	$session = $request->getSession();
   		$username = $session->get(SecurityContext::LAST_USERNAME);
   		$error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
   		$session->remove(SecurityContext::AUTHENTICATION_ERROR);
    	 
    	return $this->render('BuntsuuMainBundle:All:index.html.twig',array(
    					// last username entered by the user
    					'last_username' => $session->get(SecurityContext::LAST_USERNAME),
    					'error'         => $error,
    					'languages'=>$languages
    			));
    	
        
    }
    
    public function registrationAction(Request $request)
    {
    	$user = new User();
   		$form = $this->createForm(new UserType(),$user);
   		if($request->getMethod()=="POST")
   			{
   				$form->bindRequest($request);
   				if($form->isValid())
   				{
   					$factory = $this->get('security.encoder_factory');
   					$encoder = $factory->getEncoder($user);
   					$password = $encoder->encodePassword($user->getPassword(),$user->getSalt());
   					$user->setPassword($password);
   					$em = $this->getDoctrine()->getEntityManager();
   					$em->persist($user);
   					$em->flush();  					
   				}
   				
   	}
   		
    	return $this->render('BuntsuuMainBundle:All:registration.html.twig',array("form"=>$form->createView()));
    }
    
    public function searchAction()
    {
    	return $this->render('BuntsuuMainBundle:All:search.html.twig');
    }
}
