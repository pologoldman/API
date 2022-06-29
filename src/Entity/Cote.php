<?php

namespace App\Entity;

use App\Repository\CoteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CoteRepository::class)
 */
class Cote
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=Pari::class, mappedBy="cote")
     */
    private $paris;

    /**
     * @ORM\OneToMany(targetEntity=Matches::class, mappedBy="cote")
     */
    private $match;

    /**
     * @ORM\OneToMany(targetEntity=Score::class, mappedBy="cote")
     */
    private $score;

    public function __construct()
    {
        $this->paris = new ArrayCollection();
        $this->match = new ArrayCollection();
        $this->score = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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
            $pari->setCote($this);
        }

        return $this;
    }

    public function removePari(Pari $pari): self
    {
        if ($this->paris->removeElement($pari)) {
            // set the owning side to null (unless already changed)
            if ($pari->getCote() === $this) {
                $pari->setCote(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Matches>
     */
    public function getMatch(): Collection
    {
        return $this->match;
    }

    public function addMatch(Matches $match): self
    {
        if (!$this->match->contains($match)) {
            $this->match[] = $match;
            $match->setCote($this);
        }

        return $this;
    }

    public function removeMatch(Matches $match): self
    {
        if ($this->match->removeElement($match)) {
            // set the owning side to null (unless already changed)
            if ($match->getCote() === $this) {
                $match->setCote(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Score>
     */
    public function getScore(): Collection
    {
        return $this->score;
    }

    public function addScore(Score $score): self
    {
        if (!$this->score->contains($score)) {
            $this->score[] = $score;
            $score->setCote($this);
        }

        return $this;
    }

    public function removeScore(Score $score): self
    {
        if ($this->score->removeElement($score)) {
            // set the owning side to null (unless already changed)
            if ($score->getCote() === $this) {
                $score->setCote(null);
            }
        }

        return $this;
    }
}
