<?php

namespace App\Entity;

use App\Repository\InscriptionSoloRepository;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=InscriptionSoloRepository::class)
 */
class InscriptionSolo
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=User::class)
     * @ORM\JoinColumn(name="user_id", onDelete="CASCADE")
     */
    private $user;

    /**
     * @Gedmo\Timestampable(on = "create")
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
    * @assert\Length(min=1,minMessage="Le nom doit faire plus d'un caractère")
     * @ORM\Column(type="string", length=255)
     */
    private $nomPersoSolo;

    /**
     * @ORM\ManyToOne(targetEntity=Categorie::class, inversedBy="inscriptionSolos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $univerSolo;

    /**
     * @ORM\Column(type="boolean")
     */
    private $mediaSolo;

    /**
     * @ORM\Column(type="boolean")
     */
    private $envoiMediaSolo;

    /**
     * @ORM\Column(type="boolean")
     */
    private $aideSolo;

    /**
     * @ORM\Column(type="boolean")
     */
    private $accessoireSolo;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descriptionAccessoireSolo;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $infosSolo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?user
    {
        return $this->user;
    }

    public function setUser(user $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getNomPersoSolo(): ?string
    {
        return $this->nomPersoSolo;
    }

    public function setNomPersoSolo(string $nomPersoSolo): self
    {
        $this->nomPersoSolo = $nomPersoSolo;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getUniverSolo(): ?string
    {
        return $this->univerSolo;
    }

    public function setUniverSolo(string $univerSolo): self
    {
        $this->univerSolo = $univerSolo;

        return $this;
    }

    public function getMediaSolo(): ?bool
    {
        return $this->mediaSolo;
    }

    public function setMediaSolo(bool $mediaSolo): self
    {
        $this->mediaSolo = $mediaSolo;

        return $this;
    }

    public function getEnvoiMediaSolo(): ?bool
    {
        return $this->envoiMediaSolo;
    }

    public function setEnvoiMediaSolo(bool $envoiMediaSolo): self
    {
        $this->envoiMediaSolo = $envoiMediaSolo;

        return $this;
    }

    public function getAideSolo(): ?bool
    {
        return $this->aideSolo;
    }

    public function setAideSolo(bool $aideSolo): self
    {
        $this->aideSolo = $aideSolo;

        return $this;
    }

    public function getAccessoireSolo(): ?bool
    {
        return $this->accessoireSolo;
    }

    public function setAccessoireSolo(bool $accessoireSolo): self
    {
        $this->accessoireSolo = $accessoireSolo;

        return $this;
    }

    public function getDescriptionAccessoireSolo(): ?string
    {
        return $this->descriptionAccessoireSolo;
    }

    public function setDescriptionAccessoireSolo(?string $descriptionAccessoireSolo): self
    {
        $this->descriptionAccessoireSolo = $descriptionAccessoireSolo;

        return $this;
    }

    public function getInfosSolo(): ?string
    {
        return $this->infosSolo;
    }

    public function setInfosSolo(?string $infosSolo): self
    {
        $this->infosSolo = $infosSolo;

        return $this;
    }
}
