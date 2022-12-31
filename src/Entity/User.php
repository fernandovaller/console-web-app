<?php

namespace Homevaller\SymfonyRoutes\Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;

/**
 * @Entity(repositoryClass="UserRepository")
 * @Table(name="users")
 */
class User
{
    /**
     * @Id()
     * @Column(type="integer")
     * @GeneratedValue()
     */
    private $id;

    /** @Column(type="string", length=255, nullable=false) */
    private $name;

    /** @Column(type="string", length=255, nullable=false) */
    private $username;

    /** @Column(type="string", length=255, nullable=false) */
    private $email;

    /** @Column(type="string", length=255, nullable=false) */
    private $password;

    /** @Column(type="datetime", name="created_at") */
    private $createdAt;
}
