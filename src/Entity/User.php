<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $username;

    private $password;

    public function setUsername($username): ?string
    {
        return $this.$username = $username;
    }

    public function setPassword($password): ?string
    {
        return $this.$password = $password;
    }
}
