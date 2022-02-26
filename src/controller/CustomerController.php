<?php

namespace Calendar\Controller;

use Calendar\Model\CustomerModel;

class CustomerController implements ICustomerController {

    private $customerModel;

    public function __construct() {

        $this->customerModel = new CustomerModel();
        
    }

    public function findAll() {

        return $this->customerModel->findAll();

    }

}