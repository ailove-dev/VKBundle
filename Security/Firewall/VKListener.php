<?php

namespace Ailove\VKBundle\Security\Firewall;

use Symfony\Component\Security\Http\Firewall\AbstractAuthenticationListener;
use Symfony\Component\HttpFoundation\Request;
use Ailove\VKBundle\Security\Authentication\Token\VKUserToken;

class VKListener extends AbstractAuthenticationListener
{
    /**
     * Attempt to authenticate user.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request Request instance
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\TokenInterface|void
     */
    protected function attemptAuthentication(Request $request)
    {
        return $this->authenticationManager->authenticate(new VKUserToken());
    }
}
