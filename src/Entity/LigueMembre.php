<?php

namespace App\Entity;

use App\Repository\LigueMembreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LigueMembreRepository::class)
 */
class LigueMembre
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Ligue::class, inversedBy="ligueMembres")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_ligue;

    /**
     * @ORM\ManyToMany(targetEntity=Membre::class, inversedBy="ligueMembres")
     */
    private $id_membre;

    public function __construct()
    {
        $this->id_membre = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdLigue(): ?Ligue
    {
        return $this->id_ligue;
    }

    public function setIdLigue(?Ligue $id_ligue): self
    {
        $this->id_ligue = $id_ligue;

        return $this;
    }

    /**
     * @return Collection<int, Membre>
     */
    public function getIdMembre(): Collection
    {
        return $this->id_membre;
    }

    public function addIdMembre(Membre $idMembre): self
    {
        if (!$this->id_membre->contains($idMembre)) {
            $this->id_membre[] = $idMembre;
        }

        return $this;
    }

    public function removeIdMembre(Membre $idMembre): self
    {
        $this->id_membre->removeElement($idMembre);

        return $this;
    }
}
