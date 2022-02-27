<?php

namespace Calendar\Entity;

use Doctrine\ORM\Mapping as ORM;

/*
$serial = hash('sha512', mt_rand());
echo $serial;
*/

/**
 * @ORM\Entity
 * @ORM\Table(name="customers")
 */
class Users {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private int $id;
    
    /**
     * @ORM\Column(type="string", length=50)
     */
    private string $name;

    /**
     * Getters
     */
    public function getId(): int { return $this->id; }
    public function getName(): string { return $this->name; }

    /**
     * Setters
     */
    public function setId(int $id) { $this->id = $id; }
    public function setName(string $name) { $this->name = $name; }

}