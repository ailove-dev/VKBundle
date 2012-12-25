<?php

namespace Ailove\VKBundle\Security\Firewall;

use Ailove\AbstractSocialBundle\Classes\AbstractEntryPoint;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Ailove\VKBundle\Security\Authentication\Token\VKUserToken;

class VKEntryPoint extends AbstractEntryPoint
{
    /**
     * {@inheritDoc}
     */
    protected function getSessionProxy()
    {
        return $this->container->get('vk.oauth.proxy');
    }

    /**
     * {@inheritDoc}
     */
    protected function supportsToken(TokenInterface $token)
    {
        if ($token instanceof VKUserToken)
            return true;

        return false;
    }

}
