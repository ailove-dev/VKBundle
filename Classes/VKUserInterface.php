<?php

namespace Ailove\VKBundle\Classes;

interface VKUserInterface
{
    public function getVkUid();
    public function setVkUid($uid);
    public function getVkData();
    public function setVkData($data);
}
