<?php

namespace Calendar\Service;

use Calendar\Entity\User;
use Calendar\Data\GetConnection;
use Calendar\Repository\UserRepository;

class UserService implements UserRepository
{

    private $getConnection;

    public function __construct()
    {
        $this->getConnection = new GetConnection();
    }

    public function find(): array
    {
        $sql = $this->getConnection->entityManager()->createQueryBuilder();
        $sql->select("u")->from(User::class, "u");
        $query = $sql->getQuery();
        return $query->getArrayResult();
    }


    public function create(User $user): void
    {
        $em = $this->getConnection->entityManager();
        $em->persist($user);
        $em->flush();
    }
}
