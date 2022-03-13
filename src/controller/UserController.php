<?php

use Calendar\Service\UserService;

class UserControlelr {

    private UserService $userService;

    public function __construct()
    {
        $this->_userService = new UserService();
    }
    
    public function find() {

    }

}