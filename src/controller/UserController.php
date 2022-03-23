<?php

namespace Calendar\Controller;

use Calendar\Entity\User;
use Calendar\Service\UserService;

class UserController
{

    private $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }

    public function find()#: array
    {
        return $this->userService->find();
    }

    public function create(User $user): void
    {
        $this->userService->create($user);
    }
}
