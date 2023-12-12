<?php

namespace App\Entity;

use App\Repository\CompaignRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity(repositoryClass=CompaignRepository::class)
 */
class Compaign
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $subject;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $user_id;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $begin_on;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $end_on;

    /**
     * @ORM\Column(type="integer", options={"default" : 0})
     */
    private $links_count;

    /**
     * @ORM\Column(type="integer", options={"default" : 0})
     */
    private $medias_count;

    public function __construct()
    {
        //$this->links = new ArrayCollection();
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): self
    {
        $this->subject = $subject;

        return $this;
    }

    public function getBeginOn(): ?\DateTimeInterface
    {
        return $this->begin_on;
    }

    public function setBeginOn(?\DateTimeInterface $begin_on): self
    {
        $this->begin_on = $begin_on;

        return $this;
    }

    public function getEndOn(): ?\DateTimeInterface
    {
        return $this->end_on;
    }

    public function setEndOn(?\DateTimeInterface $end_on): self
    {
        $this->end_on = $end_on;

        return $this;
    }

    public function getLinksCount(): ?int
    {
        return $this->links_count;
    }

    public function setLinksCount(int $links_count): self
    {
        $this->links_count = $links_count;

        return $this;
    }

    public function getMediasCount(): ?int
    {
        return $this->medias_count;
    }

    public function setMediasCount(int $medias_count): self
    {
        $this->medias_count = $medias_count;

        return $this;
    }

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

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
     * @ORM\OneToMany(targetEntity=Link::class, mappedBy="compaign")
     * @ORM\OrderBy({"title" = "ASC", "id" = "ASC"})
     */
    private $links;

    /**
     * @return Collection|Link[]
     */
    public function getLinks(): Collection
    {
        return $this->links;
    }

    public function addLink(Link $link): self
    {
        if (!$this->links->contains($link)) {
            $this->link[] = $link;
            $link->setCompaign($this);
        }

        return $this;
    }

    public function __toString() {
      return $this->getSubject();
    }


    // parent compaign
    /**
     * @ORM\ManyToOne(targetEntity=Compaign::class, inversedBy="children")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id", nullable=true)
    */
    private $parentCompaign;

    /**
     * @ORM\OneToMany(targetEntity=Compaign::class, mappedBy="parentCompaign")
     */
    private $children;

    public function getParentCompaign(): ?Compaign
    {
        return $this->parentCompaign;
    }

    public function setParentCompaign(?Compaign $parentCompaign): self
    {
        $this->parentCompaign = $parentCompaign;
        $this->parentId = ($parentCompaign) ? $parentCompaign->getId() : null;

        return $this;
    }

}
