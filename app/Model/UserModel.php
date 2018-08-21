<?php

namespace Model;

use Zero\Model;
use DB\Entity;

class UserModel extends Model
{
    private $entityManager;
    public function __construct()
    {
        parent::__construct();
        $this->entityManager = Entity::getEntityManager();
    }

    public function userLogin($user)
    {
        $userRepository = $this->entityManager->getRepository('DB\User');
        $userEntity = $userRepository->findOneBy(['name' => $user->name]);
        $password = $userEntity->getPassword();
        if ($password === $user->password)
            return true;
        return false;
    }
}
