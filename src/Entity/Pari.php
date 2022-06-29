<?php

namespace App\Entity;

use App\Repository\PariRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PariRepository::class)
 */
class Pari
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Membre::class, inversedBy="paris")
     */
    private $id_joueur;

    /**
     * @ORM\ManyToOne(targetEntity=Cote::class, inversedBy="paris")
     * @ORM\JoinColumn(nullable=false)
     */
    private $cote;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdJoueur(): ?Membre
    {
        return $this->id_joueur;
    }

    public function setIdJoueur(?Membre $id_joueur): self
    {
        $this->id_joueur = $id_joueur;

        return $this;
    }

    public function getCote(): ?Cote
    {
        return $this->cote;
    }

    public function setCote(?Cote $cote): self
    {
        $this->cote = $cote;

        return $this;
    }
}
