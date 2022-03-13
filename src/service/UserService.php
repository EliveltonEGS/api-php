<?php

namespace Calendar\Service;

use Calendar\Entity\User;
use Calendar\Data\GetConnection;
use Calendar\Repository\UserRepository;

class UserService implements UserRepository{

    private $getConnection;

    public function __construct() {
        
        $this->getConnection = new GetConnection();

    }

    public function find(): array {
        
        $sql = $this->getConnection->entityManager()->createQueryBuilder();
        $sql->select("u")->from(User::class, "u");
        $query = $sql->getQuery();
        return $query->getArrayResult();
        
    }


//    public function create(User $user): User {
//
//        $user->setPwd(md5($user->getPwd()));
//        $user->setConfirm_pwd(md5($user->getConfirm_pwd()));
//        $this->userModel->create($user);
//        return $user;
// 
//    }

}