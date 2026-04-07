<?php

namespace App\Entity\Categorie;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]
#[ORM\Table(name: 'item')]
class Item
{
    #[ORM\Id]
    #[ORM\Column(name: 'idItem', type: 'integer')]
    #[ORM\GeneratedValue]
    private int $idItem;

    #[ORM\Column(name: 'libelle', type: 'string', length: 255)]
    #[Assert\NotBlank(message: 'Le libellé est obligatoire.')]
    #[Assert\Length(min: 2, max: 255, minMessage: 'Le libellé doit contenir au moins {{ limit }} caractères.', maxMessage: 'Le libellé ne doit pas dépasser {{ limit }} caractères.')]
    private string $libelle;

    #[ORM\Column(name: 'montant', type: 'float')]
    #[Assert\NotNull(message: 'Le montant est obligatoire.')]
    #[Assert\PositiveOrZero(message: 'Le montant doit être positif ou zéro.')]
    private float $montant;

    // FIX: renamed column to avoid conflict with the association property below
    #[ORM\Column(name: 'categorie', type: 'string', length: 255, nullable: true)]
    #[Assert\Length(max: 255, maxMessage: 'Le label de catégorie ne doit pas dépasser {{ limit }} caractères.')]
    private string|null $categorieLabel = null;

    #[ORM\Column(name: 'idCategorie', type: 'integer')]
    private int $idCategorie;

    // FIX: added inversedBy: 'items' to match Categorie#items OneToMany
    #[ORM\ManyToOne(targetEntity: Categorie::class, inversedBy: 'items')]
    #[ORM\JoinColumn(name: 'idCategorie', referencedColumnName: 'idCategorie')]
    #[Assert\NotNull(message: 'La catégorie est obligatoire.')]
    private Categorie $categorieRel;

    public function getIdItem(): int
    {
        return $this->idItem;
    }

    public function getLibelle(): string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): static
    {
        $this->libelle = $libelle;
        return $this;
    }

    public function getMontant(): float
    {
        return $this->montant;
    }

    public function setMontant(float $montant): static
    {
        $this->montant = $montant;
        return $this;
    }

    public function getCategorieLabel(): string|null
    {
        return $this->categorieLabel;
    }

    public function setCategorieLabel(string|null $categorieLabel): static
    {
        $this->categorieLabel = $categorieLabel;
        return $this;
    }

    public function getIdCategorie(): int
    {
        return $this->idCategorie;
    }

    public function setIdCategorie(int $idCategorie): static
    {
        $this->idCategorie = $idCategorie;
        return $this;
    }

    public function getCategorieRel(): Categorie
    {
        return $this->categorieRel;
    }

    public function setCategorieRel(Categorie $categorieRel): static
    {
        $this->categorieRel = $categorieRel;
        return $this;
    }
}
