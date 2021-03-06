<?php

namespace Calendar\Repository;

use Calendar\Entity\User;

interface UserRepository
{

    function find(): array;
    function create(User $user): void;
}
