<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AgassoRepository")
 */
class Agasso
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ag;

    /**
     * @ORM\Column(type="date")
     */
    private $date_ag;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Association", inversedBy="agasso")
     * @ORM\JoinColumn(nullable=false)
     */
    private $association;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAg(): ?string
    {
        return $this->ag;
    }

    public function setAg(string $ag): self
    {
        $this->ag = $ag;

        return $this;
    }

    public function getDateAg(): ?\DateTimeInterface
    {
        return $this->date_ag;
    }

    public function setDateAg(\DateTimeInterface $date_ag): self
    {
        $this->date_ag = $date_ag;

        return $this;
    }

    public function getAssociation(): ?Association
    {
        return $this->association;
    }

    public function setAssociation(?Association $association): self
    {
        $this->association = $association;

        return $this;
    }
}
