<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MediaInterest
 *
 * @ORM\Table(name="media_interest")
 * @ORM\Entity
 */
class MediaInterest
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
     * @ORM\Column(name="interest_id", type="integer", nullable=false)
     */
    private $interestId;

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

    public function getInterestId(): ?int
    {
        return $this->interestId;
    }

    public function setInterestId(int $interestId): self
    {
        $this->interestId = $interestId;

        return $this;
    }

    /**
     * @ORM\ManyToOne(targetEntity=Media::class, inversedBy="interests")
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
     * @ORM\ManyToOne(targetEntity=Interest::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $interest;

    public function getInterest(): ?Interest
    {
        return $this->interest;
    }

    public function setInterest(?Interest $interest): self
    {
        $this->interest = $interest;

        return $this;
    }


}
