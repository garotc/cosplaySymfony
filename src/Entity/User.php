<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Mapping\Annotation\Timestampable;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @UniqueEntity(fields={"email"}, message="Cet email a déjà un compte")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     * @Assert\Email(message = "Le format n'est pas correct")
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $pseudo;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $telephone;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $createGroup;

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\InscriptionSolo", mappedBy="user")
     */
    private $inscriptionSolo;

    /**
     * @ORM\OneToOne(targetEntity=Group::class, mappedBy="user", cascade={"persist", "remove"})
     */
    private $addGroup;

    /**
     * @ORM\OneToOne(targetEntity=InscriptionGroup::class, mappedBy="user", cascade={"persist", "remove"})
     */
    private $inscriptionGroup;

    public function __construct()
    {
        $this->inscriptionSolo = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->pseudo;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword()
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed for apps that do not check user passwords
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

/*     public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    } */

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

/*     public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    } */

    public function getCreateGroup(): ?bool
    {
        return $this->createGroup;
    }

    public function setCreateGroup(?bool $createGroup): self
    {
        $this->createGroup = $createGroup;

        return $this;
    }


    /**
     * Get the value of inscriptionSolo
     */ 
    public function getInscriptionSolo()
    {
        return $this->inscriptionSolo;
    }

    public function getAddGroup(): ?Group
    {
        return $this->addGroup;
    }

    public function setAddGroup(?Group $addGroup): self
    {
        $this->addGroup = $addGroup;

        // set (or unset) the owning side of the relation if necessary
        $newUser = null === $addGroup ? null : $this;
        if ($addGroup->getUser() !== $newUser) {
            $addGroup->setUser($newUser);
        }

        return $this;
    }

    public function getInscriptionGroup(): ?InscriptionGroup
    {
        return $this->inscriptionGroup;
    }

    public function setInscriptionGroup(InscriptionGroup $inscriptionGroup): self
    {
        $this->inscriptionGroup = $inscriptionGroup;

        // set the owning side of the relation if necessary
        if ($inscriptionGroup->getUser() !== $this) {
            $inscriptionGroup->setUser($this);
        }

        return $this;
    }
}
