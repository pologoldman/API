<?php

namespace App\Entity;

use App\Repository\ScoreRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ScoreRepository::class)
 */
class Score
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $Score_dom;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $score_ext;

    /**
     * @ORM\ManyToOne(targetEntity=Cote::class, inversedBy="score")
     */
    private $cote;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getScoreDom(): ?string
    {
        return $this->Score_dom;
    }

    public function setScoreDom(string $Score_dom): self
    {
        $this->Score_dom = $Score_dom;

        return $this;
    }

    public function getScoreExt(): ?string
    {
        return $this->score_ext;
    }

    public function setScoreExt(string $score_ext): self
    {
        $this->score_ext = $score_ext;

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
