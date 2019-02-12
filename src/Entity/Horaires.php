<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HorairesRepository")
 */
class Horaires
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\publics")
     */
    private $public;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $semaine;

    

    public function __construct()
    {
        $this->public = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|publics[]
     */
    public function getPublic(): Collection
    {
        return $this->public;
    }

    public function addPublic(publics $public): self
    {
        if (!$this->public->contains($public)) {
            $this->public[] = $public;
        }

        return $this;
    }

    public function removePublic(publics $public): self
    {
        if ($this->public->contains($public)) {
            $this->public->removeElement($public);
        }

        return $this;
    }

    public function getSemaine(): ?string
    {
        return $this->semaine;
    }

    public function setSemaine(?string $semaine): self
    {
        $this->semaine = $semaine;

        return $this;
    }
}
