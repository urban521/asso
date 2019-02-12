<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ActivitesRepository")
 */
class Activites
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
    private $title_activite;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $decript_activite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pic_activite1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pic_activite2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pic_activite3;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Users", mappedBy="activite_user")
     */
    private $users;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Association", mappedBy="activites")
     */
    private $associations;

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->associations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitleActivite(): ?string
    {
        return $this->title_activite;
    }

    public function setTitleActivite(string $title_activite): self
    {
        $this->title_activite = $title_activite;

        return $this;
    }

    public function getDecriptActivite(): ?string
    {
        return $this->decript_activite;
    }

    public function setDecriptActivite(?string $decript_activite): self
    {
        $this->decript_activite = $decript_activite;

        return $this;
    }

    public function getPicActivite1(): ?string
    {
        return $this->pic_activite1;
    }

    public function setPicActivite1(?string $pic_activite1): self
    {
        $this->pic_activite1 = $pic_activite1;

        return $this;
    }

    public function getPicActivite2(): ?string
    {
        return $this->pic_activite2;
    }

    public function setPicActivite2(?string $pic_activite2): self
    {
        $this->pic_activite2 = $pic_activite2;

        return $this;
    }

    public function getPicActivite3(): ?string
    {
        return $this->pic_activite3;
    }

    public function setPicActivite3(?string $pic_activite3): self
    {
        $this->pic_activite3 = $pic_activite3;

        return $this;
    }

    /**
     * @return Collection|Users[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(Users $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->addActiviteUser($this);
        }

        return $this;
    }

    public function removeUser(Users $user): self
    {
        if ($this->users->contains($user)) {
            $this->users->removeElement($user);
            $user->removeActiviteUser($this);
        }

        return $this;
    }

    /**
     * @return Collection|Association[]
     */
    public function getAssociations(): Collection
    {
        return $this->associations;
    }

    public function addAssociation(Association $association): self
    {
        if (!$this->associations->contains($association)) {
            $this->associations[] = $association;
            $association->addActivite($this);
        }

        return $this;
    }

    public function removeAssociation(Association $association): self
    {
        if ($this->associations->contains($association)) {
            $this->associations->removeElement($association);
            $association->removeActivite($this);
        }

        return $this;
    }
}
