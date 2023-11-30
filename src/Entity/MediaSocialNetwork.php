<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MediaSocialNetwork
 *
 * @ORM\Table(name="media_social_network")
 * @ORM\Entity
 */
class MediaSocialNetwork
{
    const SOCIAL_NETWORKS = [
        "Facebook"        => "Facebook",
        "Instagram"       => "Instagram",
        "Youtube"         => "Youtube",
        "Twitter"         => "Twitter",
        "Linkedin"        => "Linkedin",
        "Snapchat"        => "Snapchat"
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", nullable=false)
     */
    private $link;

    /**
     * @var int
     *
     * @ORM\Column(name="folowers_count", type="integer", nullable=false)
     */
    private $folowersCount;

    /**
     * @var int
     *
     * @ORM\Column(name="media_id", type="integer", nullable=false)
     */
    private $mediaId;

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

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getFolowersCount(): ?int
    {
        return $this->folowersCount;
    }

    public function setFolowersCount(int $folowersCount): self
    {
        $this->folowersCount = $folowersCount;

        return $this;
    }

    public function getMediaId(): ?int
    {
        return $this->mediaId;
    }

    public function setMediaId(int $mediaId): self
    {
        $this->mediaId = $mediaId;

        return $this;
    }

    /**
     * @ORM\ManyToOne(targetEntity=Media::class, inversedBy="socialNetworks")
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


}
