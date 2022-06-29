<?php

namespace App\Entity;

use App\Repository\MembreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MembreRepository::class)
 */
class Membre
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
    private $pseudo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $�Password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Mail;

    /**
     * @ORM\ManyToMany(targetEntity=LigueMembre::class, mappedBy="id_membre")
     */
    private $ligueMembres;

    /**
     * @ORM\OneToMany(targetEntity=Pari::class, mappedBy="id_joueur")
     */
    private $paris;

    public function __construct()
    {
        $this->ligueMembres = new ArrayCollection();
        $this->paris = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->�Password;
    }

    public function setPassword(string $Password): self
    {
        $this->Password = $Password;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->Mail;
    }

    public function setMail(string $Mail): self
    {
        $this->Mail = $Mail;

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
            $ligueMembre->addIdMembre($this);
        }

        return $this;
    }

    public function removeLigueMembre(LigueMembre $ligueMembre): self
    {
        if ($this->ligueMembres->removeElement($ligueMembre)) {
            $ligueMembre->removeIdMembre($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Pari>
     */
    public function getParis(): Collection
    {
        return $this->paris;
    }

    public function addPari(Pari $pari): self
    {
        if (!$this->paris->contains($pari)) {
            $this->paris[] = $pari;
            $pari->setIdJoueur($this);
        }

        return $this;
    }

    public function removePari(Pari $pari): self
    {
        if ($this->paris->removeElement($pari)) {
            // set the owning side to null (unless already changed)
            if ($pari->getIdJoueur() === $this) {
                $pari->setIdJoueur(null);
            }
        }

        return $this;
    }
}
