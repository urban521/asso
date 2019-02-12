<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EventsRepository")
 */
class Events
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
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieu;

    /**
     * @ORM\Column(type="date")
     */
    private $date_event;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pic_event1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pic_event2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pic_event3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pic_event4;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $participe_oui;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $participe_non;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $participe_pe;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descript_event;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Users", mappedBy="events")
     */
    private $users;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Association", mappedBy="events")
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

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getDateEvent(): ?\DateTimeInterface
    {
        return $this->date_event;
    }

    public function setDateEvent(\DateTimeInterface $date_event): self
    {
        $this->date_event = $date_event;

        return $this;
    }


    public function getPicEvent1(): ?string
    {
        return $this->pic_event1;
    }

    public function setPicEvent1(?string $pic_event1): self
    {
        $this->pic_event1 = $pic_event1;

        return $this;
    }

    public function getPicEvent2(): ?string
    {
        return $this->pic_event2;
    }

    public function setPicEvent2(?string $pic_event2): self
    {
        $this->pic_event2 = $pic_event2;

        return $this;
    }

    public function getPicEvent3(): ?string
    {
        return $this->pic_event3;
    }

    public function setPicEvent3(?string $pic_event3): self
    {
        $this->pic_event3 = $pic_event3;

        return $this;
    }

    public function getPicEvent4(): ?string
    {
        return $this->pic_event4;
    }

    public function setPicEvent4(?string $pic_event4): self
    {
        $this->pic_event4 = $pic_event4;

        return $this;
    }

    public function getParticipeOui(): ?string
    {
        return $this->participe_oui;
    }

    public function setParticipeOui(string $participe_oui): self
    {
        $this->participe_oui = $participe_oui;

        return $this;
    }

    public function getParticipeNon(): ?string
    {
        return $this->participe_non;
    }

    public function setParticipeNon(string $participe_non): self
    {
        $this->participe_non = $participe_non;

        return $this;
    }

    public function getParticipePe(): ?string
    {
        return $this->participe_pe;
    }

    public function setParticipePe(string $participe_pe): self
    {
        $this->participe_pe = $participe_pe;

        return $this;
    }

    public function getDescriptEvent(): ?string
    {
        return $this->descript_event;
    }

    public function setDescriptEvent(?string $descript_event): self
    {
        $this->descript_event = $descript_event;

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
            $user->addEvent($this);
        }

        return $this;
    }

    public function removeUser(Users $user): self
    {
        if ($this->users->contains($user)) {
            $this->users->removeElement($user);
            $user->removeEvent($this);
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
            $association->addEvent($this);
        }

        return $this;
    }

    public function removeAssociation(Association $association): self
    {
        if ($this->associations->contains($association)) {
            $this->associations->removeElement($association);
            $association->removeEvent($this);
        }

        return $this;
    }
}
