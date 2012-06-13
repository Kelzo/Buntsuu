<?php

namespace Buntsuu\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class MemberController extends Controller
{ 
    public function indexAction()
    {
        return $this->render('BuntsuuMainBundle:Member:index.html.twig');
    }
    
    public function searchAction()
    {
    	return $this->render('BuntsuuMainBundle:Member:search.html.twig');
    }
    
    public function profileAction()
    {
    	$em = $this->getDoctrine()->getEntityManager();
    	$user= $this->container->get('security.context')->getToken()->getUser();
    	return $this->render('BuntsuuMainBundle:Member:profile.html.twig',array("user"=>$user));
    }
    
    public function stampAction()
    {
    	return $this->render('BuntsuuMainBundle:Member:stamp.html.twig');
    }
    
    public function chatAction()
    {
    	return $this->render('BuntsuuMainBundle:Member:chat.html.twig');
    }
}
