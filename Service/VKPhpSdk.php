<?php

namespace Ailove\VKBundle\Service;

use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpFoundation\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Ailove\AbstractSocialBundle\Classes\AbstractSessionProxy;

use Ailove\AbstractSocialBundle\Classes\SdkInterface;

/**
 * VK oauth proxy with session support.
 */
class VKphpSdk extends \VkPhpSdk implements SdkInterface
{
    protected $appId;
    protected $appSecret;

    function __construct($appId, $appSecret)
    {
        $this->appId = $appId;
        $this->appSecret = $appSecret;
    }


    public function setAppSecret($appSecret)
    {
        $this->appSecret = $appSecret;
    }

    public function setAppId($appId)
    {
        $this->appId = $appId;
    }

    public function getAppId()
    {
        return $this->appId;
    }

    public function getAppSecret()
    {
        return $this->appSecret;
    }
}
