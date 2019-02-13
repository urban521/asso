<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AssociationRepository")
 */
class Association
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $logo;

    /**
     * @ORM\Column(type="integer")
     */
    private $num_asso;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_asso;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse_asso;

    /**
     * @ORM\Column(type="integer")
     */
    private $cp_asso;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville_asso;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tel1_asso;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tel2_asso;

    /**
     * @ORM\Column(type="date")
     */
    private $date_creation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $status_asso;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $journal_asso;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $siret_asso;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $reglement_asso;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $diplome_cadre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adress_correspondant;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Agasso", mappedBy="association")
     */
    private $agasso;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Events", inversedBy="associations")
     */
    private $events;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Activites", inversedBy="associations")
     */
    private $activites;

    public function __construct()
    {
        $this->agasso = new ArrayCollection();
        $this->events = new ArrayCollection();
        $this->activites = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(?string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    public function getNumAsso(): ?int
    {
        return $this->num_asso;
    }

    public function setNumAsso(int $num_asso): self
    {
        $this->num_asso = $num_asso;

        return $this;
    }

    public function getNomAsso(): ?string
    {
        return $this->nom_asso;
    }

    public function setNomAsso(string $nom_asso): self
    {
        $this->nom_asso = $nom_asso;

        return $this;
    }

    public function getAdresseAsso(): ?string
    {
        return $this->adresse_asso;
    }

    public function setAdresseAsso(string $adresse_asso): self
    {
        $this->adresse_asso = $adresse_asso;

        return $this;
    }

    public function getCpAsso(): ?int
    {
        return $this->cp_asso;
    }

    public function setCpAsso(int $cp_asso): self
    {
        $this->cp_asso = $cp_asso;

        return $this;
    }

    public function getVilleAsso(): ?string
    {
        return $this->ville_asso;
    }

    public function setVilleAsso(string $ville_asso): self
    {
        $this->ville_asso = $ville_asso;

        return $this;
    }

    public function getTel1Asso(): ?string
    {
        return $this->tel1_asso;
    }

    public function setTel1Asso(?string $tel1_asso): self
    {
        $this->tel1_asso = $tel1_asso;

        return $this;
    }

    public function getTel2Asso(): ?string
    {
        return $this->tel2_asso;
    }

    public function setTel2Asso(?string $tel2_asso): self
    {
        $this->tel2_asso = $tel2_asso;

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

    public function getStatusAsso(): ?string
    {
        return $this->status_asso;
    }

    public function setStatusAsso(string $status_asso): self
    {
        $this->status_asso = $status_asso;

        return $this;
    }

    public function getJournalAsso(): ?string
    {
        return $this->journal_asso;
    }

    public function setJournalAsso(string $journal_asso): self
    {
        $this->journal_asso = $journal_asso;

        return $this;
    }

    public function getSiretAsso(): ?string
    {
        return $this->siret_asso;
    }

    public function setSiretAsso(?string $siret_asso): self
    {
        $this->siret_asso = $siret_asso;

        return $this;
    }

    public function getReglementAsso(): ?string
    {
        return $this->reglement_asso;
    }

    public function setReglementAsso(?string $reglement_asso): self
    {
        $this->reglement_asso = $reglement_asso;

        return $this;
    }

    public function getDiplomeCadre(): ?string
    {
        return $this->diplome_cadre;
    }

    public function setDiplomeCadre(string $diplome_cadre): self
    {
        $this->diplome_cadre = $diplome_cadre;

        return $this;
    }

    public function getAdressCorrespondant(): ?string
    {
        return $this->adress_correspondant;
    }

    public function setAdressCorrespondant(string $adress_correspondant): self
    {
        $this->adress_correspondant = $adress_correspondant;

        return $this;
    }

    /**
     * @return Collection|agasso[]
     */
    public function getAgasso(): Collection
    {
        return $this->agasso;
    }

    public function addAgasso(agasso $agasso): self
    {
        if (!$this->agasso->contains($agasso)) {
            $this->agasso[] = $agasso;
            $agasso->setAssociation($this);
        }

        return $this;
    }

    public function removeAgasso(agasso $agasso): self
    {
        if ($this->agasso->contains($agasso)) {
            $this->agasso->removeElement($agasso);
            // set the owning side to null (unless already changed)
            if ($agasso->getAssociation() === $this) {
                $agasso->setAssociation(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|events[]
     */
    public function getEvents(): Collection
    {
        return $this->events;
    }

    public function addEvent(events $event): self
    {
        if (!$this->events->contains($event)) {
            $this->events[] = $event;
        }

        return $this;
    }

    public function removeEvent(events $event): self
    {
        if ($this->events->contains($event)) {
            $this->events->removeElement($event);
        }

        return $this;
    }

    /**
     * @return Collection|activites[]
     */
    public function getActivites(): Collection
    {
        return $this->activites;
    }

    public function addActivite(activites $activite): self
    {
        if (!$this->activites->contains($activite)) {
            $this->activites[] = $activite;
        }

        return $this;
    }

    public function removeActivite(activites $activite): self
    {
        if ($this->activites->contains($activite)) {
            $this->activites->removeElement($activite);
        }

        return $this;
    }
}
