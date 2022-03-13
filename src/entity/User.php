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
     * @ORM\Column(type="string", length=50)
     * @var string
     */
    private string $last_name;

    /**
     * @ORM\Column(type="string", length=50)
     * @var string
     */
    private string $mail;

    /**
     * @ORM\Column(type="string", length=32)
     * @var string
     */
    private string $pwd;

    /**
     * @ORM\Column(type="string", length=32)
     * @var string
     */
    private string $confirm_pwd;

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

    public function getLast_name(): string {
        return $this->last_name;
    }

    public function getMail(): string {
        return $this->mail;
    }

    public function getPwd(): string {
        return $this->pwd;
    }

    public function getConfirm_pwd(): string {
        return $this->confirm_pwd;
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

    public function setLast_name(string $last_name): void {
        $this->last_name = $last_name;
    }

    public function setMail(string $mail): void {
        $this->mail = $mail;
    }

    public function setPwd(string $pwd): void {
        $this->pwd = $pwd;
    }

    public function setConfirm_pwd(string $confirm_pwd): void {
        $this->confirm_pwd = $confirm_pwd;
    }

    /**
     * function toString
     * @return array
     */
    public function toString(): array {

        $users[] = [
            "user_id" => $this->user_id,
            "first_name" => $this->first_name,
            "last_name" => $this->last_name,
            "mail" => $this->mail,
            "pwd" => $this->pwd,
            "confirm_pwd" => $this->confirm_pwd
        ];

        return $users;
    }

}
