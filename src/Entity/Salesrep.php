<?php

namespace App\Entity;

use App\Repository\SalesrepRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SalesrepRepository::class)
 */
class Salesrep
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $routes;

    /**
     * @ORM\Column(type="date")
     * @var \DateTime A "yyyy-MM-dd" formatted value
     */
    private $joindate;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $comments;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getRoutes(): ?string
    {
        return $this->routes;
    }

    public function setRoutes(string $routes): self
    {
        $this->routes = $routes;

        return $this;
    }

    public function getJoindate(): ?\DateTimeInterface
    {
        return $this->joindate;
    }

    public function setJoindate(\DateTimeInterface $joindate): self
    {
        $this->joindate = $joindate;

        return $this;
    }

    public function getComments(): ?string
    {
        return $this->comments;
    }

    public function setComments(?string $comments): self
    {
        $this->comments = $comments;

        return $this;
    }
}
