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


/* Controller for the basic user pages */
class AllController extends Controller
{
    /* Index Page of the Site */
    public function indexAction(Request $request)
    {	
    	$em = $this->getDoctrine()->getEntityManager();
    	$languages = $em->getRepository('BuntsuuMainBundle:Language')->findAll(); /* Get all languages for the form */
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
    
    /* Show the registration form & redirect to index if is valid and pushed.*/
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
   					$encoder = $factory->getEncoder($user);// Get encoder Password 
   					$password = $encoder->encodePassword($user->getPassword(),$user->getSalt()); // Encode Password
   					$user->setPassword($password);
   					$em = $this->getDoctrine()->getEntityManager();
   					$em->persist($user);
   					$em->flush();  	
   					return $this->redirect($this->generateUrl('all_index'));
   				}			
   	}
   		
    	return $this->render('BuntsuuMainBundle:All:registration.html.twig',array("form"=>$form->createView()));
    }
    
    /* Show the simple search results.*/
    public function searchAction(Request $request)
    {
    	$languageSpoken = $request->request->get('spoken');
    	$languageSearched = $request->request->get('searched');
    	$em = $this->getDoctrine()->getEntityManager();
    	$users = $em->getRepository('BuntsuuMainBundle:Preference')->simpleSearch($languageSpoken,$languageSearched);
    	return $this->render('BuntsuuMainBundle:All:search.html.twig',array('users'=>$users));
    }
    
    /* Show the target user profile */
    public function profileTargetAction($target)
    {
    	$em = $this->getDoctrine()->getEntityManager();
    	$user =  $em->getRepository('BuntsuuMainBundle:User')->findOneByUsername($target);
    	$preference = $em->getRepository('BuntsuuMainBundle:Preference')->findOneByUser($user->getId());
    	return $this->render('BuntsuuMainBundle:All:profile_target.html.twig',array("user"=>$user,"preference"=>$preference));
    }
}
