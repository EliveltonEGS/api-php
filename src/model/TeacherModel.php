<?php

namespace Calendar\Model;

class TeacherMedel implements ITeacherModel {


    public function findAll(): array 
    {
        $data[] = ["1", "2"];
        return $data;
    }

}