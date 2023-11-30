<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Countries
 *
 * @ORM\Table(name="countries")
 * @ORM\Entity(repositoryClass="App\Repository\CountryRepository")
 * @UniqueEntity(fields={"countryname"}, errorPath="name", message="Country already exists")
 */
class Country
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
     * @var string
     *
     * @ORM\Column(name="countryCode", type="string", length=2, nullable=false, options={"fixed"=true})
     */
    private $countrycode = '';

    /**
     * @var string
     *
     * @ORM\Column(name="countryName", type="string", length=100, nullable=false)
     */
    private $countryname = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="currencyCode", type="string", length=3, nullable=true, options={"fixed"=true})
     */
    private $currencycode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fipsCode", type="string", length=2, nullable=true, options={"fixed"=true})
     */
    private $fipscode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="isoNumeric", type="string", length=4, nullable=true, options={"fixed"=true})
     */
    private $isonumeric;

    /**
     * @var string|null
     *
     * @ORM\Column(name="north", type="string", length=30, nullable=true)
     */
    private $north;

    /**
     * @var string|null
     *
     * @ORM\Column(name="south", type="string", length=30, nullable=true)
     */
    private $south;

    /**
     * @var string|null
     *
     * @ORM\Column(name="east", type="string", length=30, nullable=true)
     */
    private $east;

    /**
     * @var string|null
     *
     * @ORM\Column(name="west", type="string", length=30, nullable=true)
     */
    private $west;

    /**
     * @var string|null
     *
     * @ORM\Column(name="capital", type="string", length=100, nullable=true)
     */
    private $capital;

    /**
     * @var string|null
     *
     * @ORM\Column(name="continentName", type="string", length=100, nullable=true)
     */
    private $continentname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="continent", type="string", length=2, nullable=true, options={"fixed"=true})
     */
    private $continent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="languages", type="string", length=100, nullable=true)
     */
    private $languages;

    /**
     * @var string|null
     *
     * @ORM\Column(name="isoAlpha3", type="string", length=3, nullable=true, options={"fixed"=true})
     */
    private $isoalpha3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="geonameId", type="integer", nullable=true)
     */
    private $geonameid;

    /**
     * @var string
     *
     * @ORM\Column(name="telephonePrefix", type="string", length=10, nullable=false)
     */
    private $telephoneprefix;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCountrycode(): ?string
    {
        return $this->countrycode;
    }

    public function setCountrycode(string $countrycode): self
    {
        $this->countrycode = $countrycode;

        return $this;
    }

    public function getCountryname(): ?string
    {
        return $this->countryname;
    }

    public function setCountryname(string $countryname): self
    {
        $this->countryname = $countryname;

        return $this;
    }

    public function getCurrencycode(): ?string
    {
        return $this->currencycode;
    }

    public function setCurrencycode(?string $currencycode): self
    {
        $this->currencycode = $currencycode;

        return $this;
    }

    public function getFipscode(): ?string
    {
        return $this->fipscode;
    }

    public function setFipscode(?string $fipscode): self
    {
        $this->fipscode = $fipscode;

        return $this;
    }

    public function getIsonumeric(): ?string
    {
        return $this->isonumeric;
    }

    public function setIsonumeric(?string $isonumeric): self
    {
        $this->isonumeric = $isonumeric;

        return $this;
    }

    public function getNorth(): ?string
    {
        return $this->north;
    }

    public function setNorth(?string $north): self
    {
        $this->north = $north;

        return $this;
    }

    public function getSouth(): ?string
    {
        return $this->south;
    }

    public function setSouth(?string $south): self
    {
        $this->south = $south;

        return $this;
    }

    public function getEast(): ?string
    {
        return $this->east;
    }

    public function setEast(?string $east): self
    {
        $this->east = $east;

        return $this;
    }

    public function getWest(): ?string
    {
        return $this->west;
    }

    public function setWest(?string $west): self
    {
        $this->west = $west;

        return $this;
    }

    public function getCapital(): ?string
    {
        return $this->capital;
    }

    public function setCapital(?string $capital): self
    {
        $this->capital = $capital;

        return $this;
    }

    public function getContinentname(): ?string
    {
        return $this->continentname;
    }

    public function setContinentname(?string $continentname): self
    {
        $this->continentname = $continentname;

        return $this;
    }

    public function getContinent(): ?string
    {
        return $this->continent;
    }

    public function setContinent(?string $continent): self
    {
        $this->continent = $continent;

        return $this;
    }

    public function getLanguages(): ?string
    {
        return $this->languages;
    }

    public function setLanguages(?string $languages): self
    {
        $this->languages = $languages;

        return $this;
    }

    public function getIsoalpha3(): ?string
    {
        return $this->isoalpha3;
    }

    public function setIsoalpha3(?string $isoalpha3): self
    {
        $this->isoalpha3 = $isoalpha3;

        return $this;
    }

    public function getGeonameid(): ?int
    {
        return $this->geonameid;
    }

    public function setGeonameid(?int $geonameid): self
    {
        $this->geonameid = $geonameid;

        return $this;
    }

    public function getTelephoneprefix(): ?string
    {
        return $this->telephoneprefix;
    }

    public function setTelephoneprefix(string $telephoneprefix): self
    {
        $this->telephoneprefix = $telephoneprefix;

        return $this;
    }

    public function __toString() {
      return $this->getCountryName();
    }


}
