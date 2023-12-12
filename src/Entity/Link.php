<?php

namespace App\Entity;

use App\Repository\LinkRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="link")
 * @ORM\Entity(repositoryClass=LinkRepository::class)
 * @UniqueEntity(fields={"link"}, errorPath="name", message="Link already exists")
 */
class Link
{

    const GEOGRAPHICAL_SCOPE = [
        "Local"           => "Local",
        "International"       => "International",
    ];

    const ORIENTATION = [
        "Positive"           => "Positive",
        "Neutral"       => "Neutral",
        "Negative"         => "Negative",
    ];

    const LANGUAGES = [
        "ar"           => "Arabic",
        "fr"       => "French",
        "en"         => "English",
    ];

    public function __construct() {
        $this->geographical_scope = 'Local';
        $this->orientation = 'Neutral';
        $this->published_on = new \DateTime();
        $this->country_id = 0;
    }

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
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
    private $link;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $media_id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $file_name;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $geographical_scope;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $orientation;

    /**
     * @ORM\Column(type="integer")
     */
    private $category_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $user_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $compaign_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $language_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $country_id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $domain;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $lang;

    /**
     * @ORM\Column(type="date")
     */
    private $published_on;

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

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getMediaId(): ?int
    {
        return $this->media_id;
    }

    public function setMediaId(?int $media_id): self
    {
        $this->media_id = $media_id;

        return $this;
    }

    public function getFileName(): ?string
    {
        return $this->file_name;
    }

    public function setFileName(?string $file_name): self
    {
        if (!empty($file_name)) {
            $path = json_decode($file_name, true)['path'];
            $file_name = str_replace('attachements/', '', $path);
        }
        $this->file_name = $file_name;

        return $this;
    }
    
     public function getAttachment(): ?string
    {
        return '/uploads/attachements/'.$this->file_name;
    }

    public function getGeographicalScope(): ?string
    {
        return $this->geographical_scope;
    }

    public function setGeographicalScope(string $geographical_scope): self
    {
        $this->geographical_scope = $geographical_scope;

        return $this;
    }

    public function getOrientation(): ?string
    {
        return $this->orientation;
    }

    public function setOrientation(string $orientation): self
    {
        $this->orientation = $orientation;

        return $this;
    }

    public function getDomain(): ?string
    {
        return $this->domain;
    }

    public function setDomain(string $domain): self
    {
        $this->domain = $domain;

        return $this;
    }

    public function getCategoryId(): ?int
    {
        return $this->category_id;
    }

    public function setCategoryId(int $category_id): self
    {
        $this->category_id = $category_id;

        return $this;
    }

    public function getLang(): ?string
    {
        return $this->lang;
    }

    public function setLang(string $lang): self
    {
        $this->lang = $lang;

        return $this;
    }

    public function getLanguageId(): ?int
    {
        return $this->language_id;
    }

    public function setLanguageId(?int $language_id): self
    {
        $this->language_id = $language_id;

        return $this;
    }

    public function getPublishedOn(): ?\DateTimeInterface
    {
        return $this->published_on;
    }

    public function setPublishedOn(\DateTimeInterface $published_on): self
    {
        $this->published_on = $published_on;

        return $this;
    }

    /**
     * @ORM\ManyToOne(targetEntity=Media::class, inversedBy="links")
     * @ORM\JoinColumn(nullable=false)
     */
    private $media;

    public function getMedia(): ?Media
    {
        return $this->media;
    }

    public function setMedia(?Media $media): self
    {
        $this->media = $media;

        return $this;
    }

    /**
     * @ORM\ManyToOne(targetEntity=Category::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

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
     * @ORM\ManyToOne(targetEntity=Compaign::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $compaign;

    public function getCompaign(): ?Compaign
    {
        return $this->compaign;
    }

    public function setCompaign(?Compaign $compaign): self
    {
        $this->compaign = $compaign;

        return $this;
    }

    /**
     * @ORM\ManyToOne(targetEntity=Language::class)
     */
    private $language;

    public function getLanguage(): ?Language
    {
        return $this->language;
    }

    public function setLanguage(?Language $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function __toString() {
      return !empty($this->getTitle()) ? $this->getTitle() : 'Set title' ;
    }

    public function extractDomain(){
        $pieces = parse_url($this->getLink());
        $domain = isset($pieces['host']) ? $pieces['host'] : '';
        if(preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)){
            return $regs['domain'];
        }
        return '';
    }
    
}
