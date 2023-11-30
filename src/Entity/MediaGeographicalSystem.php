<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MediaGeographicalSystem
 *
 * @ORM\Table(name="media_geographical_system")
 * @ORM\Entity
 */
class MediaGeographicalSystem
{
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
     * @ORM\Column(name="media_id", type="integer", nullable=false)
     */
    private $mediaId;

    /**
     * @var int
     *
     * @ORM\Column(name="geographical_system_id", type="integer", nullable=false)
     */
    private $geographicalSystemId;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getGeographicalSystemId(): ?int
    {
        return $this->geographicalSystemId;
    }

    public function setGeographicalSystemId(int $geographicalSystemId): self
    {
        $this->geographicalSystemId = $geographicalSystemId;

        return $this;
    }

    /**
     * @ORM\ManyToOne(targetEntity=Media::class, inversedBy="geographicalSystems")
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
     * @ORM\ManyToOne(targetEntity=GeographicalSystem::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $geographicalSystem;

    public function getGeographicalSystem(): ?GeographicalSystem
    {
        return $this->geographicalSystem;
    }

    public function setGeographicalSystem(?GeographicalSystem $geographicalSystem): self
    {
        $this->geographicalSystem = $geographicalSystem;

        return $this;
    }


}
