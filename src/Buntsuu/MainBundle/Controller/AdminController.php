<?php

namespace Buntsuu\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/* Controller for the admin user pages */
class AdminController extends Controller
{
    /* Show the index Admin */
    public function indexAction($name)
    {
        return $this->render('BuntsuuMainBundle:Default:index.html.twig', array('name' => $name));
    }
}
