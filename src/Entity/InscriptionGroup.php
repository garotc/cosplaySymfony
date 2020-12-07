<?php

namespace App\Entity;

use App\Repository\InscriptionGroupRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InscriptionGroupRepository::class)
 */
class InscriptionGroup
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=User::class, inversedBy="inscriptionGroup", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=Group::class, inversedBy="inscriptionGroups")
     * @ORM\JoinColumn(nullable=false)
     */
    private $RelatedGroup;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $NomPersoGroup;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getRelatedGroup(): ?Group
    {
        return $this->RelatedGroup;
    }

    public function setRelatedGroup(?Group $RelatedGroup): self
    {
        $this->RelatedGroup = $RelatedGroup;

        return $this;
    }

    public function getNomPersoGroup(): ?string
    {
        return $this->NomPersoGroup;
    }

    public function setNomPersoGroup(string $NomPersoGroup): self
    {
        $this->NomPersoGroup = $NomPersoGroup;

        return $this;
    }
}
