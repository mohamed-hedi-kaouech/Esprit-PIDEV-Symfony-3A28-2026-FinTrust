<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'users')]
class User
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int $id;

    #[ORM\Column(name: 'currentKycId', type: 'integer', nullable: true)]
    private int|null $currentKycId = null;

    #[ORM\Column(type: 'string', length: 50)]
    private string $nom;

    #[ORM\Column(type: 'string', length: 50)]
    private string $prenom;

    #[ORM\Column(type: 'string', length: 100)]
    private string $email;

    #[ORM\Column(name: 'numTel', type: 'string', length: 20, nullable: true)]
    private string|null $numTel = null;

    #[ORM\Column(type: 'string', length: 10)]
    private string $role;

    #[ORM\Column(type: 'string', length: 255)]
    private string $password;

    #[ORM\Column(name: 'kycStatus', type: 'string', length: 20, nullable: true)]
    private string|null $kycStatus = null;

    #[ORM\Column(name: 'createdAt', type: 'datetime')]
    private \DateTimeInterface $createdAt;

    #[ORM\Column(type: 'string')]
    private string $status = 'EN_ATTENTE';

    public function getId(): int
    {
        return $this->id;
    }

    public function getCurrentKycId(): int|null
    {
        return $this->currentKycId;
    }

    public function setCurrentKycId(int|null $currentKycId): static
    {
        $this->currentKycId = $currentKycId;
        return $this;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getNumTel(): string|null
    {
        return $this->numTel;
    }

    public function setNumTel(string|null $numTel): static
    {
        $this->numTel = $numTel;
        return $this;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function setRole(string $role): static
    {
        $this->role = $role;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;
        return $this;
    }

    public function getKycStatus(): string|null
    {
        return $this->kycStatus;
    }

    public function setKycStatus(string|null $kycStatus): static
    {
        $this->kycStatus = $kycStatus;
        return $this;
    }

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;
        return $this;
    }
}
