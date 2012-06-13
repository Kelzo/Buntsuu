<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        // login_check
        if ($pathinfo === '/login_check') {
            return array('_route' => 'login_check');
        }

        // all_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'all_index');
            }
            return array (  '_controller' => 'Buntsuu\\MainBundle\\Controller\\AllController::indexAction',  '_route' => 'all_index',);
        }

        // all_search
        if ($pathinfo === '/search') {
            return array (  '_controller' => 'Buntsuu\\MainBundle\\Controller\\AllController::searchAction',  '_route' => 'all_search',);
        }

        // all_registration
        if ($pathinfo === '/registration') {
            return array (  '_controller' => 'Buntsuu\\MainBundle\\Controller\\AllController::registrationAction',  '_route' => 'all_registration',);
        }

        if (0 === strpos($pathinfo, '/member')) {
            // member_index
            if (rtrim($pathinfo, '/') === '/member') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'member_index');
                }
                return array (  '_controller' => 'Buntsuu\\MainBundle\\Controller\\MemberController::indexAction',  '_route' => 'member_index',);
            }

            // member_search
            if ($pathinfo === '/member/search') {
                return array (  '_controller' => 'Buntsuu\\MainBundle\\Controller\\MemberController::searchAction',  '_route' => 'member_search',);
            }

            // member_profile
            if ($pathinfo === '/member/profile') {
                return array (  '_controller' => 'Buntsuu\\MainBundle\\Controller\\MemberController::profileAction',  '_route' => 'member_profile',);
            }

            // member_stamp
            if ($pathinfo === '/member/stamp') {
                return array (  '_controller' => 'Buntsuu\\MainBundle\\Controller\\MemberController::stampAction',  '_route' => 'member_stamp',);
            }

            // member_chat
            if ($pathinfo === '/member/chat') {
                return array (  '_controller' => 'Buntsuu\\MainBundle\\Controller\\MemberController::chatAction',  '_route' => 'member_chat',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
