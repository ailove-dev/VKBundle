<?php

namespace Ailove\VKBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader;
use Ailove\AbstractSocialBundle\Classes\AbstractExtension;

class VKExtension extends AbstractExtension
{

    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {

        //loading services first to override service classes via configuration if need

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');

        parent::load($configs, $container);

    }

    /**
     * @return string prefix for bundle parameters
     */
    protected function getParametersPrefix()
    {
        return 'vk.';
    }


    /**
     * {@inheritDoc}
     */
    protected function newConfiguration()
    {
        return new Configuration();
    }
}
