<?php

namespace Calendar\Service;

use Calendar\Entity\User;
use Calendar\Model\UserModel;

class UserService{

    private $userModel;

    public function __construct() {

        $this->userModel = new UserModel();
        
    }

    public function find() {

        return $this->userModel->find();

    }

    public function create(User $user): User {

        $user->setPwd(md5($user->getPwd()));
        $user->setConfirm_pwd(md5($user->getConfirm_pwd()));
        $this->userModel->create($user);
        return $user;
 
    }

}