<?php

namespace App\Entity\Publication;

use App\Repository\PublicationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: PublicationRepository::class)]
#[ORM\Table(name: 'publication')]
class Publication
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_publication')]
    private ?int $id = null;

    #[ORM\Column(name: 'titre', type: Types::STRING, length: 255)]
    #[Assert\NotBlank]
    private ?string $titre = null;

    #[ORM\Column(name: 'contenu', type: Types::TEXT)]
    #[Assert\NotBlank]
    private ?string $contenu = null;

    #[ORM\Column(name: 'categorie', type: Types::STRING, length: 100, nullable: true)]
    private ?string $categorie = null;

    #[ORM\Column(name: 'statut', type: Types::STRING, length: 50)]
    private ?string $statut = null;

    #[ORM\Column(name: 'est_visible', type: Types::BOOLEAN, options: ['default' => true])]
    private bool $estVisible = true;

    #[ORM\Column(name: 'date_publication', type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datePublication = null;

    #[ORM\OneToMany(targetEntity: \App\Entity\User\Feedback::class, mappedBy: 'publication', cascade: ['remove'], orphanRemoval: true)]
    private Collection $feedbacks;

    public function __construct()
    {
        $this->feedbacks = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;
        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): static
    {
        $this->contenu = $contenu;
        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(?string $categorie): static
    {
        $this->categorie = $categorie;
        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;
        return $this;
    }

    public function isEstVisible(): bool
    {
        return $this->estVisible;
    }

    public function setEstVisible(bool $estVisible): static
    {
        $this->estVisible = $estVisible;
        return $this;
    }

    public function getDatePublication(): ?\DateTimeInterface
    {
        return $this->datePublication;
    }

    public function setDatePublication(?\DateTimeInterface $datePublication): static
    {
        $this->datePublication = $datePublication;
        return $this;
    }

    /**
     * @return Collection<int, \App\Entity\User\Feedback>
     */
    public function getFeedbacks(): Collection
    {
        return $this->feedbacks;
    }

    public function addFeedback(\App\Entity\User\Feedback $feedback): static
    {
        if (!$this->feedbacks->contains($feedback)) {
            $this->feedbacks->add($feedback);
            $feedback->setPublication($this);
        }

        return $this;
    }

    public function removeFeedback(\App\Entity\User\Feedback $feedback): static
    {
        if ($this->feedbacks->removeElement($feedback)) {
            // set the owning side to null (unless already changed)
            if ($feedback->getPublication() === $this) {
                $feedback->setPublication(null);
            }
        }

        return $this;
    }
}

