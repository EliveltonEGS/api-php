<?php

namespace Calendar\Model;

use Calendar\Entity\User;

interface IUserModel {

    function find(): array;
    function create(User $user): User;

}