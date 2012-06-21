<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       'login_check' => true,
       'logout' => true,
       'all_index' => true,
       'all_search' => true,
       'all_registration' => true,
       'member_index' => true,
       'member_search' => true,
       'member_profile' => true,
       'member_preference' => true,
       'member_stamp' => true,
       'member_chat' => true,
       'member_chat_message' => true,
       'member_chat_target' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function getlogin_checkRouteInfo()
    {
        return array(array (), array (), array (), array (  0 =>   array (    0 => 'text',    1 => '/login_check',  ),));
    }

    private function getlogoutRouteInfo()
    {
        return array(array (), array (), array (), array (  0 =>   array (    0 => 'text',    1 => '/logout',  ),));
    }

    private function getall_indexRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Buntsuu\\MainBundle\\Controller\\AllController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getall_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Buntsuu\\MainBundle\\Controller\\AllController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search',  ),));
    }

    private function getall_registrationRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Buntsuu\\MainBundle\\Controller\\AllController::registrationAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/registration',  ),));
    }

    private function getmember_indexRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Buntsuu\\MainBundle\\Controller\\MemberController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/member/',  ),));
    }

    private function getmember_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Buntsuu\\MainBundle\\Controller\\MemberController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/member/search',  ),));
    }

    private function getmember_profileRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Buntsuu\\MainBundle\\Controller\\MemberController::profileAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/member/profile',  ),));
    }

    private function getmember_preferenceRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Buntsuu\\MainBundle\\Controller\\MemberController::preferenceAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/member/preference',  ),));
    }

    private function getmember_stampRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Buntsuu\\MainBundle\\Controller\\MemberController::stampAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/member/stamp',  ),));
    }

    private function getmember_chatRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Buntsuu\\MainBundle\\Controller\\MemberController::chatAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/member/chat',  ),));
    }

    private function getmember_chat_messageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Buntsuu\\MainBundle\\Controller\\MemberController::addMessageAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/member/chat/add',  ),));
    }

    private function getmember_chat_targetRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Buntsuu\\MainBundle\\Controller\\MemberController::selectTargetAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/member/chat/target',  ),));
    }
}
