<?php

namespace Buntsuu\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AdminController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('BuntsuuMainBundle:Default:index.html.twig', array('name' => $name));
    }
}
