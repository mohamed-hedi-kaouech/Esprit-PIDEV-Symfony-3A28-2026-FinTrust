<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity]
#[ORM\Table(name: 'kyc')]
class Kyc
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int $id;

    #[ORM\Column(type: 'string', length: 20, unique: true)]
    private string $cin;

    #[ORM\Column(type: 'string', length: 255)]
    private string $adresse;

    #[ORM\Column(name: 'date_naissance', type: 'date')]
    private \DateTimeInterface $dateNaissance;

    #[ORM\Column(name: 'signature_path', type: 'string', length: 255, nullable: true)]
    private string|null $signaturePath = null;

    #[ORM\Column(name: 'signature_uploaded_at', type: 'datetime', nullable: true)]
    private \DateTimeInterface|null $signatureUploadedAt = null;

    #[ORM\Column(type: 'string')]
    private string $statut = 'EN_ATTENTE';

    #[ORM\Column(name: 'commentaire_admin', type: 'text', nullable: true)]
    private string|null $commentaireAdmin = null;

    #[ORM\Column(name: 'date_submission', type: 'datetime')]
    private \DateTimeInterface $dateSubmission;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'id')]
    private User $user;

    #[ORM\OneToMany(targetEntity: KycFile::class, mappedBy: 'kyc')]
    private Collection $files;

    public function __construct()
    {
        $this->files = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getCin(): string
    {
        return $this->cin;
    }

    public function setCin(string $cin): static
    {
        $this->cin = $cin;
        return $this;
    }

    public function getAdresse(): string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;
        return $this;
    }

    public function getDateNaissance(): \DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $dateNaissance): static
    {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    public function getSignaturePath(): string|null
    {
        return $this->signaturePath;
    }

    public function setSignaturePath(string|null $signaturePath): static
    {
        $this->signaturePath = $signaturePath;
        return $this;
    }

    public function getSignatureUploadedAt(): \DateTimeInterface|null
    {
        return $this->signatureUploadedAt;
    }

    public function setSignatureUploadedAt(\DateTimeInterface|null $signatureUploadedAt): static
    {
        $this->signatureUploadedAt = $signatureUploadedAt;
        return $this;
    }

    public function getStatut(): string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;
        return $this;
    }

    public function getCommentaireAdmin(): string|null
    {
        return $this->commentaireAdmin;
    }

    public function setCommentaireAdmin(string|null $commentaireAdmin): static
    {
        $this->commentaireAdmin = $commentaireAdmin;
        return $this;
    }

    public function getDateSubmission(): \DateTimeInterface
    {
        return $this->dateSubmission;
    }

    public function setDateSubmission(\DateTimeInterface $dateSubmission): static
    {
        $this->dateSubmission = $dateSubmission;
        return $this;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): static
    {
        $this->user = $user;
        return $this;
    }

    public function getFiles(): Collection
    {
        return $this->files;
    }

    public function addFile(KycFile $file): static
    {
        if (!$this->files->contains($file)) {
            $this->files->add($file);
        }
        return $this;
    }

    public function removeFile(KycFile $file): static
    {
        $this->files->removeElement($file);
        return $this;
    }
}
