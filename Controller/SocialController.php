<?php


namespace Ailove\VKBundle\Controller;

use Ailove\AbstractSocialBundle\Controller\SocialController as Controller;
use Ailove\VKBundle\Security\Authentication\Token\VKUserToken;

class SocialController extends Controller
{

    /**
     * Implement this method to create empty token of your social network
     * @return \Symfony\Component\Security\Core\Authentication\Token\TokenInterface
     */
    protected function createAnonymousToken()
    {
        return new VKUserToken();
    }

    /**
     * Implement this to return a name of a secured route where we'll redirect after creating empty token to start authentication
     * via authenticaiton entry point. Secured route should point to actual controller action.
     * @return string
     */
    protected function getSecuredAreaRoute()
    {
        return '_vk_connect';
    }


}
