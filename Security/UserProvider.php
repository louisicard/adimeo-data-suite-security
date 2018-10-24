<?php

namespace AdimeoDataSuite\Bundle\SecurityBundle\Security;

use AdimeoDataSuite\Bundle\CommonsBundle\Index\IndexManager;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

class UserProvider implements UserProviderInterface
{
  /** @var  IndexManager */
  private $indexManager;

  public function __construct(IndexManager $indexManager){
    $this->indexManager = $indexManager;
  }

  public function loadUserByUsername($username)
  {
    // TODO: Implement loadUserByUsername() method.
  }

  public function refreshUser(UserInterface $user)
  {
    // TODO: Implement refreshUser() method.
  }

  public function supportsClass($class)
  {
    // TODO: Implement supportsClass() method.
  }

}