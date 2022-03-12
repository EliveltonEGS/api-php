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
    public function getId(): int { return $this->id; }
    public function getCode(): string { return $this->code; }
    public function getFirst_name(): string { return $this->first_name; }
    public function getLast_name(): string { return $this->last_name; }
    public function getMail(): string { return $this->mail; }
    public function getPwd(): string { return $this->pwd; }
    public function getConfirm_pwd(): string { return $this->confirm_pwd; }

    /**
     * Setters
     */
    public function setId(int $id) { $this->id = $id; }
    public function setCode(int $code) { $this->code = $code; }
    public function setFirst_name(string $first_name) { $this->first_name = $first_name; }
    public function setLast_name(string $last_name) { $this->last_name = $last_name; }
    public function setMail(string $mail) { $this->mail = $mail; }
    public function setPwd(string $pwd) { $this->pwd = $pwd; }
    public function setConfirm_pwd(string $confirm_pwd) { $this->confirm_pwd = $confirm_pwd; }

    /**
     * function toString
     * @return array
     */
    public function toString(): array {

        $users[] = [
            "first_name"        => $this->first_name,
            "last_name"         => $this->last_name,
            "mail"              => $this->mail,
            "pwd"               => $this->pwd,
            "confirm_pwd"       => $this->confirm_pwd
        ];

        return $users;

    }
}