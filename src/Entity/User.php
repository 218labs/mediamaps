<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Compaign;
use App\Entity\Link;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User implements UserInterface
{

    const ROLES = [
            'admin' => 'Administrator',
            'user' => 'Client' 
    ];

    const STATUS = [
        'active'   => 'Enabled',
        'inactive' => 'Disabled'
    ];

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=180, nullable=true)
     * @Assert\Email( message = "Email invalide." )
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $password_reset_token;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $roles;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $locale;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $adresse;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $company;


    public function getId(): ?int
    {
        return $this->id;
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

    public function getFullName(): ?string
    {
        return trim($this->prenom . ' ' . $this->nom);
    }

    public function getShortName(): ?string
    {
        return substr($this->prenom, 0, 1) . substr($this->nom, 0, 1);
    }

    public function getUsername(): ?string
    {
        return $this->email;
    }

    public function getUserIdentifier(): ?string
    {
        return $this->email;
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

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getPasswordResetToken(): ?string
    {
        return $this->password_reset_token;
    }

    public function setPasswordResetToken(?string $password_reset_token): self
    {
        $this->password_reset_token = $password_reset_token;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function setLocale(string $locale): self
    {
        $this->locale = $locale;

        return $this;
    }

    public function getStatusLabel()
    {
        return self::STATUS[$this->status];
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = json_decode($this->roles, true) ?: [];
        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = json_encode($roles);

        return $this;
    }

    public function getRoleName()
    {
        $roles = $this->getRoles();
        $role_name = \strtolower($roles[0]);
        return \str_replace('role_', '', $role_name);
    }

    public function getRoleLabel($app_name = 'visiteurs')
    {
        $role_name = $this->getRoleName();
        return isset($roles[$role_name]) ? $roles[$role_name] : $role_name;
    }

    public static function getRoleMeta($role_name, $meta = 'singular')
    {
        return isset(self::ROLES_META[$role_name][$meta]) ? self::ROLES_META[$role_name][$meta] : $role_name;
    }

    public function hasRole($name)
    {
        return $this->getRoleName() == $name;
    }

    public function hasRoles($roles)
    {
        return in_array($this->getRoleName(), $roles);
    }

    public function __toString()
    {
        return $this->getFullName();
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(?string $company): self
    {
        $this->company = $company;

        return $this;
    }

    /**
     * @ORM\OneToMany(targetEntity=Compaign::class, mappedBy="user")
     */
    private $compaigns;

    /**
     * @ORM\OneToMany(targetEntity=Link::class, mappedBy="user")
     */
    private $links;


    public function __construct()
    {
        $this->compaigns = new ArrayCollection();
        $this->links = new ArrayCollection();
    }

    /**
     * @return Collection|compaigns[]
     */
    public function getCompaigns(): Collection
    {
        return $this->compaigns;
    }

    public function addCompaign(Compaign $compaign): self
    {
        if (!$this->compaigns->contains($compaign)) {
            $this->compaigns[] = $compaign;
            $compaign->setUser($this);
        }

        return $this;
    }

    public function removeCompaign(Compaign $compaign): self
    {
        if ( $this->compaigns->removeElement($compaign) ) {
            // set the owning side to null (unless already changed)
            if ($compaign->getUser() === $this) {
                $compaign->setUser(null); 
            }
        }

        return $this;
    }

}
