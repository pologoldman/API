<?php

namespace App\Entity;

use App\Repository\LigueRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LigueRepository::class)
 */
class Ligue
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nom;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_creation;

    /**
     * @ORM\OneToMany(targetEntity=LigueMembre::class, mappedBy="id_ligue")
     */
    private $ligueMembres;

    public function __construct()
    {
        $this->ligueMembres = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->date_creation;
    }

    public function setDateCreation(\DateTimeInterface $date_creation): self
    {
        $this->date_creation = $date_creation;

        return $this;
    }

    /**
     * @return Collection<int, LigueMembre>
     */
    public function getLigueMembres(): Collection
    {
        return $this->ligueMembres;
    }

    public function addLigueMembre(LigueMembre $ligueMembre): self
    {
        if (!$this->ligueMembres->contains($ligueMembre)) {
            $this->ligueMembres[] = $ligueMembre;
            $ligueMembre->setIdLigue($this);
        }

        return $this;
    }

    public function removeLigueMembre(LigueMembre $ligueMembre): self
    {
        if ($this->ligueMembres->removeElement($ligueMembre)) {
            // set the owning side to null (unless already changed)
            if ($ligueMembre->getIdLigue() === $this) {
                $ligueMembre->setIdLigue(null);
            }
        }

        return $this;
    }
}
