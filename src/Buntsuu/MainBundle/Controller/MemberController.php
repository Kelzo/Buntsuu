<?php

namespace Buntsuu\MainBundle\Controller;

use Buntsuu\MainBundle\Entity\Language;

use Buntsuu\MainBundle\Entity\Message;

use Symfony\Component\HttpKernel\Exception\HttpException;

use Buntsuu\MainBundle\Entity\Preference;

use Buntsuu\MainBundle\Form\PreferenceType;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class MemberController extends Controller
{ 
    public function indexAction(Request $request)
    {
    	if($request->isXmlHttpRequest())
    	{
    		return $this->doActionArticle($request);
    	}
    	$em = $this->getDoctrine()->getEntityManager();
    	$article = $em->getRepository('BuntsuuMainBundle:Article')->theLast();
    	$user= $this->container->get('security.context')->getToken()->getUser();
    	$preference = $em->getRepository('BuntsuuMainBundle:Preference')->findOneByUser($user->getId());
        return $this->render('BuntsuuMainBundle:Member:index.html.twig',array("article"=>$article,"user"=>$user,"preference"=>$preference));
    }
    
    
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
	    	if(!$preferences->getFirstLanguageSearched()){
	  		$preferences->setFirstLanguageSearched(new Language());}
	    	if(!$preferences->getSecondLanguageSearched()){
	    	$preferences->setSecondLanguageSearched(new Language());}
	    	if(!$preferences->getThirdLanguageSearched()){
	    	$preferences->setThirdLanguageSearched(new Language());}
	    	if(!$preferences->getFirstLanguageSpoken()){
	    	$preferences->setFirstLanguageSpoken(new Language());}
			if(!$preferences->getSecondLanguageSpoken()){
	    	$preferences->setSecondLanguageSpoken(new Language());}
			if(!$preferences->getThirdLanguageSpoken()){
				$preferences->setThirdLanguageSpoken(new Language());
			}
	    	
	    	$pUsers = $em->getRepository('BuntsuuMainBundle:Preference')->principalPreference($preferences);
	    	$sUsers = $em->getRepository('BuntsuuMainBundle:Preference')->secondaryPreference($preferences);
	    	$tUsers  = $em->getRepository('BuntsuuMainBundle:Preference')->tertiaryPreference($preferences);
    	}
		
    	return $this->render('BuntsuuMainBundle:Member:search.html.twig',array("pUsers"=>$pUsers,"sUsers"=>$sUsers,"tUsers"=>$tUsers));
    }
    
    /* Show the PROFILE*/
    public function profileAction()
    
    {
    	$em = $this->getDoctrine()->getEntityManager();
    	$user= $this->container->get('security.context')->getToken()->getUser();
    	$preference = $em->getRepository('BuntsuuMainBundle:Preference')->findOneByUser($user->getId());
    	return $this->render('BuntsuuMainBundle:Member:profile.html.twig',array("user"=>$user,"preference"=>$preference));
    }
    
    public function profileTargetAction($target)
    
    {
    	$em = $this->getDoctrine()->getEntityManager();
    	$user =  $em->getRepository('BuntsuuMainBundle:User')->findOneByUsername($target);
    	$preference = $em->getRepository('BuntsuuMainBundle:Preference')->findOneByUser($user->getId());
    	return $this->render('BuntsuuMainBundle:Member:profile_target.html.twig',array("user"=>$user,"preference"=>$preference));
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
	    	$messages = $em->getRepository('BuntsuuMainBundle:Message')->getConversationBetween($user->getId(),$currentTarget);
    	}
    	return $this->render('BuntsuuMainBundle:Member:chat.html.twig',array("targets"=>$targets,"messages"=>$messages,"user"=>$user,"currentTarget"=>$currentTarget));
    }
    
    /* Sort target to keep only once of each target */
    public function sortTarget($targets){
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
    	if (!$request->isXmlHttpRequest()){
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
    public function addMessageAction(Request $request){
    	if (!$request->isXmlHttpRequest()){
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
    
   		$targets = $em->getRepository('BuntsuuMainBundle:Message')->userTarget($user->getId());
    	$messages = array();
    	
    	/*If targets exits, we get the messages*/
    	if($targets)
    	{
    		$currentTarget= $em->getRepository('BuntsuuMainBundle:User')->findOneByUsername($request->request->get('username'));
    		$messages = $em->getRepository('BuntsuuMainBundle:Message')->getConversationBetween($user->getId(),$currentTarget->getUsername());
    	}
    	
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
    	if($action=="next")	
    	{
    		$article = $em->getRepository('BuntsuuMainBundle:Article')->theNext($id);
    		return $this->render('BuntsuuMainBundle:Member:action_article.html.twig',array("article"=>$article));
    	}
    	
    	if($action=="previous")
    	{
    		$article = $em->getRepository('BuntsuuMainBundle:Article')->thePrevious($id);
    		return $this->render('BuntsuuMainBundle:Member:action_article.html.twig',array("article"=>$article));
    	}
    }
    
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
    			
    			return$this->redirect($this->generateUrl('member_profile',array('user'=>$user,'preference'=>$preference)));
    		}
    			
    			
    		
    	}
    	
    	return $this->render('BuntsuuMainBundle:Member:preference.html.twig',array("form"=>$form->createView()));
    }
}
