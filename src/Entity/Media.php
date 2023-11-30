<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Entity\MediaInterest;
use App\Entity\MediaLanguages;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Media
 *
 * @ORM\Table(name="media")
 * @ORM\Entity(repositoryClass="App\Repository\MediaRepository")
 * @UniqueEntity(fields={"name"}, errorPath="name", message="Media already exists")
 */
class Media
{
    const LANGUAGES = [
        "Arabic" => "Arabic",
        "French" => "French",
        "English" => "English",
        "Spanish" => "Spanish",
        "German" => "German",
        "Chinese" => "Chinese",
        'Other' => 'Other'
    ];

    const CATEGORIES = [
    'Electronic newspaper' => 'Electronic newspaper',
    'News paper'=>'News paper', 
    'Magazine'=> 'Magazine',
    'News agency'=>'News agency',
    'Radio'=>'Radio', 
    'Tv'=>'TV', 
    'News account'=> 'News account', 
    'Influential' => 'Influential', 
    'Sociale media'=> 'Sociale media',
    'Government' => 'Government',
    'Organisation' => 'Organisation',
    'Political party' => 'Political party',
    'University' => 'University',
    'Think Tank Search' => 'Think Tank Search',
    'Other'=>'Other',
];

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=false)
     */
    private $parentId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=150, nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="logo", type="string", length=150, nullable=true)
     */
    private $logo;

    /**
     * @var int
     *
     * @ORM\Column(name="country_id", type="integer", nullable=false)
     */
    private $countryId;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=150, nullable=false)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=150, nullable=false)
     */
    private $website;

    /**
     * @var int
     *
     * @ORM\Column(name="visitors_count", type="integer", nullable=false)
     */
    private $visitorsCount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact", type="string", length=150, nullable=true)
     */
    private $contact;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=150, nullable=false)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="language_id", type="integer", nullable=false)
     */
    private $languageId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telephone", type="string", length=12, nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook", type="string", length=100, nullable=true)
     */
    private $facebook;

    /**
     * @var int
     *
     * @ORM\Column(name="facebook_followers_count", type="integer", nullable=true)
     */
    private $facebookFollowersCount;

    /**
     * @var string
     *
     * @ORM\Column(name="twitter", type="string", length=100, nullable=true)
     */
    private $twitter;

    /**
     * @var int
     *
     * @ORM\Column(name="twitter_followers_count", type="integer", nullable=true)
     */
    private $twitterFollowersCount;

    /**
     * @var string
     *
     * @ORM\Column(name="instagram", type="string", length=100, nullable=true)
     */
    private $instagram;

    /**
     * @var int
     *
     * @ORM\Column(name="instagram_followers_count", type="integer", nullable=true)
     */
    private $instagramFollowersCount;

    /**
     * @var string
     *
     * @ORM\Column(name="youtube", type="string", length=100, nullable=true)
     */
    private $youtube;

    /**
     * @var int
     *
     * @ORM\Column(name="youtube_followers_count", type="integer", nullable=true)
     */
    private $youtubeFollowersCount;

    /**
     * @var string
     *
     * @ORM\Column(name="domain",type="string", length=100)
     */
    private $domain;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
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

    public function getCountryId(): ?int
    {
        return $this->countryId;
    }

    public function setCountryId(int $countryId): self
    {
        $this->countryId = $countryId;

        return $this;
    }

    public function getLanguageId(): ?int
    {
        return $this->languageId;
    }

    public function setLanguageId(int $languageId): self
    {
        $this->languageId = $languageId;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(string $website): self
    {
        $this->website = $website;

        return $this;
    }

    public function getVisitorsCount(): ?int
    {
        return $this->visitorsCount;
    }

    public function setVisitorsCount(int $visitorsCount): self
    {
        $this->visitorsCount = $visitorsCount;

        return $this;
    }

    public function getContact(): ?string
    {
        return $this->contact;
    }

    public function setContact(?string $contact): self
    {
        $this->contact = $contact;

        return $this;
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

    public function getFacebook(): ?string
    {
        return $this->facebook;
    }

    public function setFacebook(?string $facebook): self
    {
        $this->facebook = $facebook;

        return $this;
    }

    public function getFacebookFollowersCount(): ?int
    {
        return $this->facebookFollowersCount;
    }

    public function setFacebookFollowersCount(int $facebookFollowersCount): self
    {
        $this->facebookFollowersCount = (int)$facebookFollowersCount;

        return $this;
    }

    public function getTwitter(): ?string
    {
        return $this->twitter;
    }

    public function setTwitter(?string $twitter): self
    {
        $this->twitter = $twitter;

        return $this;
    }

    public function getTwitterFollowersCount(): ?int
    {
        return $this->twitterFollowersCount;
    }

    public function setTwitterFollowersCount(int $twitterFollowersCount): self
    {
        $this->twitterFollowersCount = $twitterFollowersCount;

        return $this;
    }

    public function getInstagram(): ?string
    {
        return $this->instagram;
    }

    public function setInstagram(?string $instagram): self
    {
        $this->instagram = $instagram;

        return $this;
    }

    public function getInstagramFollowersCount(): ?int
    {
        return $this->instagramFollowersCount;
    }

    public function setInstagramFollowersCount(int $instagramFollowersCount): self
    {
        $this->instagramFollowersCount = $instagramFollowersCount;

        return $this;
    }

    public function getYoutube(): ?string
    {
        return $this->youtube;
    }

    public function setYoutube(?string $youtube): self
    {
        $this->youtube = $youtube;

        return $this;
    }

    public function getYoutubeFollowersCount(): ?int
    {
        return $this->youtubeFollowersCount;
    }


    public function setYoutubeFollowersCount(int $youtubeFollowersCount): self
    {
        $this->youtubeFollowersCount = $youtubeFollowersCount;

        return $this;
    }

    /**
     * @ORM\ManyToOne(targetEntity=Country::class)
     */
    private $country;

    public function getCountry(): ?Country
    {
        return $this->country;
    }

    public function setCountry(?Country $country): self
    {
        $this->country = $country;

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

    public function getFileName(): ?string
    {
        return $this->logo;
    }

    public function setFileName(string $file_name): self
    {
        if (!empty($file_name)) {
            $path = json_decode($file_name, true)['path'];
            $file_name = str_replace('logos/', '', $path);
        }

        $this->logo = $file_name;

        return $this;
    }

    public function getImage(): ?string
    {
        return '/uploads/logos/'.$this->logo;
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

    /**
     * @ORM\OneToMany(targetEntity=MediaInterest::class, mappedBy="media")
     */
    private $interests;

    /**
     * @ORM\OneToMany(targetEntity=MediaLanguages::class, mappedBy="media")
     */
    private $languages;

    /**
     * @ORM\OneToMany(targetEntity=MediaGeographicalSystem::class, mappedBy="media")
     */
    private $geographicalSystems;

    /**
     * @ORM\OneToMany(targetEntity=MediaSocialNetwork::class, mappedBy="media")
     */
    private $socialNetworks;


    public function __construct()
    {
        $this->interests = new ArrayCollection();
        $this->languages = new ArrayCollection();
        $this->socialNetworks = new ArrayCollection();
        $this->geographicalSystems = new ArrayCollection();
    }

    /**
     * @return Collection|interests[]
     */
    public function getInterests(): Collection
    {
        return $this->interests;
    }

    public function addInterest(MediaInterest $interest): self
    {
        if (!$this->interests->contains($interest)) {
            $this->interests[] = $interest;
            $interest->setMedia($this);
        }

        return $this;
    }

    public function removeInterest(MediaInterest $interest): self
    {
        if ($this->interests->removeElement($interest)) {
            // set the owning side to null (unless already changed)
            if ($interest->getMedia() === $this) {
                $interest->setMedia(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|languages[]
     */
    public function getLanguages(): Collection
    {
        return $this->languages;
    }

    public function addLanguage(MediaLanguages $language): self
    {
        if (!$this->languages->contains($language)) {
            $this->languages[] = $language;
            $language->setMedia($this);
        }

        return $this;
    }

    public function removeLanguage(MediaLanguages $language): self
    {
        if ($this->languages->removeElement($language)) {
            // set the owning side to null (unless already changed)
            if ($language->getMedia() === $this) {
                $language->setMedia(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|geographicalSystems[]
     */
    public function getGeographicalSystems(): Collection
    {
        return $this->geographicalSystems;
    }

    public function addGeographicalSystem(MediaGeographicalSystem $geographicalSystem): self
    {
        if (!$this->geographicalSystems->contains($geographicalSystem)) {
            $this->geographicalSystems[] = $geographicalSystem;
            $geographicalSystem->setMedia($this);
        }

        return $this;
    }

    public function removeGeographicalSystem(MediaGeographicalSystem $geographicalSystem): self
    {
        if ($this->geographicalSystems->removeElement($geographicalSystem)) {
            // set the owning side to null (unless already changed)
            if ($geographicalSystem->getMedia() === $this) {
                $geographicalSystem->setMedia(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|socialNetworks[]
     */
    public function getSocialNetworks(): Collection
    {
        return $this->socialNetworks;
    }

    /**
     * @ORM\ManyToOne(targetEntity=Media::class)
     */
    private $parent;

    public function getParent(): ?Media
    {
        return $this->parent;
    }

    public function setParent(?Media $parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    public function __toString() {
      return $this->getName();
    }

    


}
