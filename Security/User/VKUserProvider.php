<?php


namespace Ailove\VKBundle\Security\User;

use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\UserInterface;

use Ailove\AbstractSocialBundle\Classes\AbstractUserProvider;
use Ailove\VKBundle\Classes\VKUserInterface;

class VKUserProvider extends AbstractUserProvider
{
    /**
     * Find user by social uid.
     *
     * @param string $uid user social uid
     * @return \FOS\UserBundle\Model\UserInterface
     * @throws UsernameNotFoundException
     *
     */
    public function findUserByUid($uid)
    {
        return $this->userManager->findUserBy(array('vkUid' => $uid));
    }

    /**
     * {@inheritDoc}
     */
    public function getUserUid(UserInterface $user)
    {
        if (!$user instanceof VKUserInterface)
            throw new UnsupportedUserException('User is not supported');

        return $user->getVkUid();
    }
}
