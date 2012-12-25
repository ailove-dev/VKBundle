<?php

namespace Ailove\VKBundle\Security\Authentication\Provider;

use Ailove\AbstractSocialBundle\Classes\AbstractAuthenticationProvider;
use Ailove\VKBundle\Security\Authentication\Token\VKUserToken as Token;

class VKProvider extends AbstractAuthenticationProvider
{
    /**
     * @{inheritDoc}
     */
    protected function getTokenClass()
    {
        return get_class(new Token());
    }

    /**
     * @{inheritDoc}
     */
    protected function getDefaultSocialRoles()
    {
        return array('ROLE_VK_USER');
    }
}
