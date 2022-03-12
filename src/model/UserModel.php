<?php

namespace Calendar\Model;

use Calendar\Data\GetConnection;
use Calendar\Entity\User;

class UserModel implements IUserModel{

    private $getConnection;

    public function __construct() {
        
        $this->getConnection = new GetConnection();

    }

    public function find(): array {

        $sql = $this->getConnection->entityManager()->createQueryBuilder();
        $sql->select("u")->from(User::class, "u");
        $query = $sql->getQuery();
        $products = $query->getArrayResult();
        return $products;   

    }

    public function create(User $user): User {

        $em = $this->getConnection->entityManager();
        $em->persist($user);
        $em->flush();
        return $user;

    }

}