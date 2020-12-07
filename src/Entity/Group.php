<?php

namespace App\Entity;

use App\Repository\GroupRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GroupRepository::class)
 * @ORM\Table(name="`group`")
 */
class Group
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nameGroup;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $universGroup;

    /**
     * @ORM\ManyToOne(targetEntity=Categorie::class, inversedBy="CategorieGroup")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorieGroup;

    /**
     * @ORM\Column(type="boolean")
     */
    private $typeMediaGroup;

    /**
     * @ORM\Column(type="boolean")
     */
    private $lancementMediaGroup;

    /**
     * @ORM\Column(type="boolean")
     */
    private $aideSceneGroup;

    /**
     * @ORM\Column(type="boolean")
     */
    private $accessoiresGroup;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descriptionAccessoiresGroup;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $infosGroup;

    /**
     * @ORM\OneToOne(targetEntity=User::class, inversedBy="addGroup", cascade={"persist", "remove"})
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity=InscriptionGroup::class, mappedBy="RelatedGroup", orphanRemoval=true)
     */
    private $inscriptionGroups;

    public function __construct()
    {
        $this->inscriptionGroups = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameGroup(): ?string
    {
        return $this->nameGroup;
    }

    public function setNameGroup(string $nameGroup): self
    {
        $this->nameGroup = $nameGroup;

        return $this;
    }

    public function getUniversGroup(): ?string
    {
        return $this->universGroup;
    }

    public function setUniversGroup(string $universGroup): self
    {
        $this->universGroup = $universGroup;

        return $this;
    }

    public function getCategorieGroup(): ?Categorie
    {
        return $this->categorieGroup;
    }

    public function setCategorieGroup(?Categorie $categorieGroup): self
    {
        $this->categorieGroup = $categorieGroup;

        return $this;
    }

    public function getTypeMediaGroup(): ?bool
    {
        return $this->typeMediaGroup;
    }

    public function setTypeMediaGroup(bool $typeMediaGroup): self
    {
        $this->typeMediaGroup = $typeMediaGroup;

        return $this;
    }

    public function getLancementMediaGroup(): ?bool
    {
        return $this->lancementMediaGroup;
    }

    public function setLancementMediaGroup(bool $lancementMediaGroup): self
    {
        $this->lancementMediaGroup = $lancementMediaGroup;

        return $this;
    }

    public function getAideSceneGroup(): ?bool
    {
        return $this->aideSceneGroup;
    }

    public function setAideSceneGroup(bool $aideSceneGroup): self
    {
        $this->aideSceneGroup = $aideSceneGroup;

        return $this;
    }

    public function getAccessoiresGroup(): ?bool
    {
        return $this->accessoiresGroup;
    }

    public function setAccessoiresGroup(bool $accessoiresGroup): self
    {
        $this->accessoiresGroup = $accessoiresGroup;

        return $this;
    }

    public function getDescriptionAccessoiresGroup(): ?string
    {
        return $this->descriptionAccessoiresGroup;
    }

    public function setDescriptionAccessoiresGroup(?string $descriptionAccessoiresGroup): self
    {
        $this->descriptionAccessoiresGroup = $descriptionAccessoiresGroup;

        return $this;
    }

    public function getInfosGroup(): ?string
    {
        return $this->infosGroup;
    }

    public function setInfosGroup(?string $infosGroup): self
    {
        $this->infosGroup = $infosGroup;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection|InscriptionGroup[]
     */
    public function getInscriptionGroups(): Collection
    {
        return $this->inscriptionGroups;
    }

    public function addInscriptionGroup(InscriptionGroup $inscriptionGroup): self
    {
        if (!$this->inscriptionGroups->contains($inscriptionGroup)) {
            $this->inscriptionGroups[] = $inscriptionGroup;
            $inscriptionGroup->setRelatedGroup($this);
        }

        return $this;
    }

    public function removeInscriptionGroup(InscriptionGroup $inscriptionGroup): self
    {
        if ($this->inscriptionGroups->removeElement($inscriptionGroup)) {
            // set the owning side to null (unless already changed)
            if ($inscriptionGroup->getRelatedGroup() === $this) {
                $inscriptionGroup->setRelatedGroup(null);
            }
        }

        return $this;
    }
}
