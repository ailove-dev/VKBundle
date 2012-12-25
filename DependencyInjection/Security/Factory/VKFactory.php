<?php

namespace Ailove\VKBundle\DependencyInjection\Security\Factory;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Ailove\AbstractSocialBundle\Classes\AbstractFactory;

class VKFactory extends AbstractFactory
{
    /**
     * @{inheritDoc}
     */
    function getServicePrefix()
    {
        return 'vk';
    }
}
