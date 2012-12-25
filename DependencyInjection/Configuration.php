<?php

namespace Ailove\VKBundle\DependencyInjection;

use Ailove\AbstractSocialBundle\Classes\AbstractConfiguration;

class Configuration extends AbstractConfiguration
{
    /**
     * @return string id of the root tree
     */
    protected function getTreeName()
    {
        return 'vk';
    }
}
