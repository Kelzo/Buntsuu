<?php

namespace Buntsuu\MainBundle\Controller;

use Buntsuu\MainBundle\Form\MessageType;

use Buntsuu\MainBundle\Form\UserProfileType;

use Buntsuu\MainBundle\Entity\Language;

use Buntsuu\MainBundle\Entity\Message;

use Symfony\Component\HttpKernel\Exception\HttpException;

use Buntsuu\MainBundle\Entity\Preference;

use Buntsuu\MainBundle\Form\PreferenceType;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class MemberController extends Controller
{ 
	/*Show the member index */
    public function indexAction(Request $request)
    {
    	if($request->isXmlHttpRequest())
    	{
    		return $this->doActionArticle($request);
    	}
    	$em = $this->getDoctrine()->getEntityManager();
    	$article = $em->getRepository('BuntsuuMainBundle:Article')->theLast(); // Get the Last Article
    	$user= $this->container->get('security.context')->getToken()->getUser();
    	$preferences = $em->getRepository('BuntsuuMainBundle:Preference')->findOneByUser($user->getId());

    	$tUsers=array();
    	 
    	if($preferences)
    	{
    		$preferences = $this->preloadLanguague($preferences);
    		$tUsers  = $em->getRepository('BuntsuuMainBundle:Preference')->tertiaryPreference($preferences); // Get the tertiary Preferences
    	}
        return $this->render('BuntsuuMainBundle:Member:index.html.twig',array("article"=>$article,"user"=>$user,"preferences"=>$preferences,"tUsers"=>$tUsers));
    }
    
    /*Show the results of the Advanced search. */
    public function searchAction()
    {
    	$em = $this->getDoctrine()->getEntityManager();
    	$user = $this->container->get('security.context')->getToken()->getUser();
    	$preferences = $em->getRepository('BuntsuuMainBundle:Preference')->findOneByUser($user->getId());
    	$pUsers=array();
    	$sUsers=array();
    	$tUsers=array();
    	
    	if($preferences)
    	{
			$preferences = $this->preloadLanguague($preferences);
	    	$pUsers = $em->getRepository('BuntsuuMainBundle:Preference')->principalPreference($preferences); // Get the principal Preferences
	    	$sUsers = $em->getRepository('BuntsuuMainBundle:Preference')->secondaryPreference($preferences); // Get the secondary Preferences
	    	$tUsers  = $em->getRepository('BuntsuuMainBundle:Preference')->tertiaryPreference($preferences); // Get the tertiary Preferences
    	}
		
    	return $this->render('BuntsuuMainBundle:Member:search.html.twig',array("pUsers"=>$pUsers,"sUsers"=>$sUsers,"tUsers"=>$tUsers));
    }
    
    /*Preload the Language if they don't exist*/
    public function preloadLanguague($preferences){
    	
    	if(!$preferences->getFirstLanguageSearched())
    	{
    		$preferences->setFirstLanguageSearched(new Language());
    	}
    	if(!$preferences->getSecondLanguageSearched())
    	{
    		$preferences->setSecondLanguageSearched(new Language());
    	}
    	if(!$preferences->getThirdLanguageSearched())
    	{
    		$preferences->setThirdLanguageSearched(new Language());
    	}
    	if(!$preferences->getFirstLanguageSpoken())
    	{
    		$preferences->setFirstLanguageSpoken(new Language());
    	}
    	if(!$preferences->getSecondLanguageSpoken())
    	{
    		$preferences->setSecondLanguageSpoken(new Language());
    	}
    	if(!$preferences->getThirdLanguageSpoken())
    	{
    		$preferences->setThirdLanguageSpoken(new Language());
    	}
    	return $preferences;
    }
    
    /* Show the current user profile */
    public function profileAction()
    
    {
    	$em = $this->getDoctrine()->getEntityManager();
    	$user= $this->container->get('security.context')->getToken()->getUser();
    	$preference = $em->getRepository('BuntsuuMainBundle:Preference')->findOneByUser($user->getId());
    	return $this->render('BuntsuuMainBundle:Member:profile.html.twig',array("user"=>$user,"preference"=>$preference));
    }
    
    /* Edit the current user profile */
    public function editProfileAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
    	$user= $this->container->get('security.context')->getToken()->getUser();
    	$form = $this->createForm(new UserProfileType(),$user);
    	
    	if($request->getMethod()=="POST")
    	{
    		$form->bindRequest($request);
   			if($form->isValid())
    		{
				$em->persist($user);
    			$em->flush();
    			$preference = $em->getRepository('BuntsuuMainBundle:Preference')->findOneByUser($user->getId());
    			return $this->redirect($this->generateUrl('member_profile',array('user'=>$user,'preference'=>$preference)));
    		}
    	}
    	
    	return $this->render('BuntsuuMainBundle:Member:edit_profile.html.twig',array("form"=>$form->createView()));
    }
    
    /* Show the target user profile */
    public function profileTargetAction($target)
    
    {
    	$em = $this->getDoctrine()->getEntityManager();
    	$user =  $em->getRepository('BuntsuuMainBundle:User')->findOneByUsername($target);
    	$preference = $em->getRepository('BuntsuuMainBundle:Preference')->findOneByUser($user->getId());
    	return $this->render('BuntsuuMainBundle:Member:profile_target.html.twig',array("user"=>$user,"preference"=>$preference));
    }
    
    /* Send a message to target */
    public function messageTargetAction($target,Request $request)
    {
    	$em = $this->getDoctrine()->getEntityManager();
    	$target = $em->getRepository('BuntsuuMainBundle:User')->findOneByUsername($target);
    	$user= $this->container->get('security.context')->getToken()->getUser();
    	$message = new Message();
    	$form = $this->createForm(new MessageType(),$message);
    	 
    	if($request->getMethod()=="POST")
    	{
    		$form->bindRequest($request);
    		if($form->isValid())
    		{
    			$message->addAuthor($user);
    			$message->addTarget($target);
    			$message->setDatetime(new \Datetime());
    			$em->persist($message);
    			$em->flush();
    			return $this->redirect($this->generateUrl('member_chat'));
    		}
    	}
    	 
    	return $this->render('BuntsuuMainBundle:Member:edit_profile.html.twig',array("form"=>$form->createView()));
    }
    
    
    /* Show the User's STAMPS */
    public function stampAction()
    {
    	return $this->render('BuntsuuMainBundle:Member:stamp.html.twig');
    }
    
    /*Open the chat room with all targets of current user, and open one current target, the first by default */
    public function chatAction(Request $request)
    {
    	$em = $this->getDoctrine()->getEntityManager();
    	$user= $this->container->get('security.context')->getToken()->getUser();
    	$targets = $em->getRepository('BuntsuuMainBundle:Message')->userTarget($user->getId());
    	$messages = array();
    	$currentTarget = "";
    	if($targets)
    	{
	    	$targets = $this->sortTarget($targets);
	    	$currentTarget= $targets[0];
	    	$messages = $em->getRepository('BuntsuuMainBundle:Message')->getConversationBetween($user->getId(),$currentTarget); /* Get the messages between current user & current target */ 
    	}
    	return $this->render('BuntsuuMainBundle:Member:chat.html.twig',array("targets"=>$targets,"messages"=>$messages,"user"=>$user,"currentTarget"=>$currentTarget));
    }
    
    /* Sort array of targets to keep only once of each target */
    public function sortTarget($targets)
    {
    	$username= $this->container->get('security.context')->getToken()->getUser()->getUsername();
    	$array_target = array();
    	for($i=0;$i<count($targets);$i++)
    	{
    		if ($targets[$i]['author']!=$username)
    		{		
    			$array_target[]=$targets[$i]['author'];   			
    		}    		    		
    		else 
    		{
    			$array_target[]=$targets[$i]['target'];
    		}
    	}
    	$array_target =array_unique($array_target);
    	sort($array_target);
    	return $array_target;
    }
    
    /*Select a Target With Ajax*/
    public function selectTargetAction(Request $request)
    {
    	if (!$request->isXmlHttpRequest())
    	{
    		throw new HttpException('The request must be contain a object xhr');
    	}
    	$em = $this->getDoctrine()->getEntityManager();
    	$user= $this->container->get('security.context')->getToken()->getUser();
    	$targets = $em->getRepository('BuntsuuMainBundle:Message')->userTarget($user->getId());
    
    	/*If targets exits, we get the messages*/
    	if($targets)
    	{
    		$currentTarget= $em->getRepository('BuntsuuMainBundle:User')->findOneByUsername($request->request->get('username'));
    		$messages = $em->getRepository('BuntsuuMainBundle:Message')->getConversationBetween($user->getId(),$currentTarget->getUsername());
    	}
    	
    	return $this->render('BuntsuuMainBundle:Member:add_message.html.twig',array("messages"=>$messages,"currentTarget"=>$currentTarget->getUsername()));
    }
    
    /*Add a Message With AJAX */
    public function addMessageAction(Request $request)
    {
    	if (!$request->isXmlHttpRequest())
    	{
    		throw new HttpException('The request must be contain a object xhr');
    	}
   	
    	$em = $this->getDoctrine()->getEntityManager();
    	$user= $this->container->get('security.context')->getToken()->getUser();
    	$target= $em->getRepository('BuntsuuMainBundle:User')->findOneByUsername($request->request->get('username'));
    	$message = new Message();
    	$message->setMessage($request->request->get('message'));
    	$message->addTarget($target);
    	$message->addAuthor($user);
    	$message->setDatetime( new \DateTime());
    	$em->persist($message);
    	$em->flush();
    
   		$targets = $em->getRepository('BuntsuuMainBundle:Message')->userTarget($user->getId()); /* Get all user targets */
    	$messages = array();
    	
    	/*If targets exits, we get the messages*/
    	if($targets)
    	{
    		$currentTarget= $em->getRepository('BuntsuuMainBundle:User')->findOneByUsername($request->request->get('username'));
    		$messages = $em->getRepository('BuntsuuMainBundle:Message')->getConversationBetween($user->getId(),$currentTarget->getUsername());
    	}
    	/*If we have more than 4 message, we delete the first of our list*/
   		if (count($messages)>4)
   		{
   			$em->remove($messages[0]);		
   			$em->flush();
   		}
    	return $this->render('BuntsuuMainBundle:Member:add_message.html.twig',array("messages"=>$messages,"currentTarget"=>$currentTarget->getUsername()));
    }
    
      
    /* Next or Previous Article */
    public function doActionArticle($request)
    {
    	$em = $this->getDoctrine()->getEntityManager();
    	$action = $request->request->get('action');
    	$id = $request->request->get('id');
    	/*If the user click on next*/
    	if($action=="Next")	
    	{
    		$article = $em->getRepository('BuntsuuMainBundle:Article')->theNext($id); /* Next Article */
    		return $this->render('BuntsuuMainBundle:Member:action_article.html.twig',array("article"=>$article));
    	}
    	/*If the user click on previous*/
    	if($action=="Previous")
    	{
    		$article = $em->getRepository('BuntsuuMainBundle:Article')->thePrevious($id); /* Previous Article */
    		return $this->render('BuntsuuMainBundle:Member:action_article.html.twig',array("article"=>$article));
    	}
    }
    
    /* Show the form to edit preferences */
    public function preferenceAction(Request $request)
    {
    	$em = $this->getDoctrine()->getEntityManager();
    	$user= $this->container->get('security.context')->getToken()->getUser();
    	$preference = $em->getRepository('BuntsuuMainBundle:Preference')->findOneByUser($user->getId());
    	if(!$preference)
    	{
    		$preference = new Preference();
    	}
    	$form = $this->createForm(new PreferenceType(),$preference);
    	
    	if($request->getMethod()=="POST")
    	{
    		$form->bindRequest($request);
   			if($form->isValid())
    		{
    			$user= $this->container->get('security.context')->getToken()->getUser();
    			$preference->setUser($user);
    			$em->persist($preference);
    			$em->flush();
    			return $this->redirect($this->generateUrl('member_profile',array('user'=>$user,'preference'=>$preference)));
    		}		
    	}   	
    	return $this->render('BuntsuuMainBundle:Member:preference.html.twig',array("form"=>$form->createView()));
    }
}
