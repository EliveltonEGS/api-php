<?php

namespace Calendar\Model;

use Calendar\Data\GetConnection;
use Calendar\Entity\Customer;

class CustomerModel implements ICustomerModel {

    private $getConnection;

    public function __construct() {
        
        $this->getConnection = new GetConnection();

    }

    public function findAll(): array {

        $sql = $this->getConnection->entityManager()->createQueryBuilder();
        $sql->select("c")->from(Customer::class, "c");
        $query = $sql->getQuery();
        $products = $query->getArrayResult();
        return $products;   

    }

}