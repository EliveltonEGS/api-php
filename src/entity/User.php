<?php

namespace Calendar\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/*
  $serial = hash('sha512', mt_rand());
  echo $serial;
 */

/**
 * @ORM\Entity
 * @ORM\Table(name="tb_users")
 */
class User {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @var int
     */
    private int $id;

    /**
     * @ORM\column(type="string", length=128)
     * @var string
     */
    private string $user_id;

    /**
     * @ORM\Column(type="string", length=50)
     * @var string
     */
    private string $first_name;

    /**
     * Getters
     */
    public function getId(): int {
        return $this->id;
    }

    public function getUser_id(): string {
        return $this->user_id;
    }

    public function getFirst_name(): string {
        return $this->first_name;
    }

    /**
     * Setters
     */
    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setUser_id(string $user_id): void {
        $this->user_id = $user_id;
    }

    public function setFirst_name(string $first_name): void {
        $this->first_name = $first_name;
    }

    /**
     * function toString
     * @return array
     */
    public function toString(): array {

        $user = [
            "id" => $this->id,
            "user_id" => $this->user_id,
            "first_name" => $this->first_name
        ];

        return $user;
    }

}
