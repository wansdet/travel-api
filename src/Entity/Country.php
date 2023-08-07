<?php

declare(strict_types=1);

namespace App\Entity;

use ApiPlatform\Metadata\ApiProperty;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Delete;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Patch;
use ApiPlatform\Metadata\Post;
use ApiPlatform\Metadata\Put;
use App\Repository\CountryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ApiResource(
    operations: [
        new Get(
            normalizationContext: [
                'groups' => ['Country:read'],
            ],
        ),
        new GetCollection(
            normalizationContext: [
                'groups' => ['CountryCollection:read'],
            ],
        ),
        new Post(
            normalizationContext: [
                'groups' => ['Country:read'],
            ],
            denormalizationContext: [
                'groups' => ['Country:write'],
            ],
            security: 'is_granted("ROLE_ADMIN")',
        ),
        new Put(
            normalizationContext: [
                'groups' => ['Country:read'],
            ],
            denormalizationContext: [
                'groups' => ['Country:update'],
            ],
            security: 'is_granted("ROLE_ADMIN")',
        ),
        new Patch(
            normalizationContext: [
                'groups' => ['Country:read'],
            ],
            denormalizationContext: [
                'groups' => ['Country:update'],
            ],
            security: 'is_granted("ROLE_ADMIN")',
        ),
        new Delete(
            security: 'is_granted("ROLE_ADMIN")',
        ),
    ],
    filters: [
        'country.search_filter',
        'country.order_filter',
    ],
    order: ['sortOrder' => 'ASC'],
    paginationClientItemsPerPage: true,
)]
#[ORM\Entity(repositoryClass: CountryRepository::class)]
#[ORM\HasLifecycleCallbacks]
class Country implements AuthoredEntityInterface
{
    use TimestampsTrait;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?bool $active = null;

    #[ORM\Column(length: 1000, nullable: true)]
    #[Assert\Length(max: 1000)]
    private ?string $alerts = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotNull]
    #[Assert\Length(max: 100)]
    private ?string $atm = null;

    #[ORM\Column(length: 500)]
    #[Assert\NotNull]
    #[Assert\Length(max: 500)]
    private ?string $briefDescription = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotNull]
    #[Assert\Length(max: 100)]
    private ?string $capital = null;

    #[ORM\Id]
    #[ORM\Column(type: 'string', length: 2, nullable: false)]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[Assert\NotNull]
    #[Assert\Length(min: 2, max: 2)]
    #[ApiProperty(identifier: true)]
    private ?string $countryCode = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotNull]
    #[Assert\Length(max: 100)]
    private ?string $countryName = null;

    #[ORM\Column(length: 100)]
    #[Assert\Length(max: 100)]
    private ?string $createdBy = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotNull]
    #[Assert\Length(max: 50)]
    private ?string $currency = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotNull]
    #[Assert\Length(max: 50)]
    private ?string $electricity = null;

    #[ORM\Column(length: 100, nullable: true)]
    #[Assert\Length(max: 100)]
    private ?string $entry = null;

    #[ORM\Column(length: 50, nullable: true)]
    #[Assert\Length(max: 50)]
    private ?string $gettingAround = null;

    #[ORM\Column(nullable: true)]
    private array $imageTags = [];

    #[ORM\Column(length: 200)]
    #[Assert\NotNull]
    #[Assert\Length(max: 200)]
    private ?string $language = null;

    #[ORM\Column(length: 4000)]
    #[Assert\NotNull]
    #[Assert\Length(max: 4000)]
    private ?string $longDescription = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotNull]
    #[Assert\Length(max: 100)]
    private ?string $mobilePhone = null;

    #[ORM\OneToMany(mappedBy: 'country', targetEntity: Place::class)]
    private Collection $places;

    #[ORM\Column(type: Types::SMALLINT)]
    #[Assert\NotNull]
    private ?int $ranking = null;

    #[ORM\ManyToOne(inversedBy: 'countries')]
    #[ORM\JoinColumn(name: 'region_code', referencedColumnName: 'region_code', nullable: false)]
    #[Assert\NotNull]
    private ?Region $region = null;

    #[ORM\Column(length: 1000, nullable: true)]
    #[Assert\Length(max: 1000)]
    private ?string $safety = null;

    #[ORM\Column(length: 50, nullable: true)]
    #[Assert\Length(max: 50)]
    private ?string $salesTax = null;

    #[ORM\Column(length: 2000)]
    #[Assert\NotNull]
    #[Assert\Length(max: 2000)]
    private ?string $shortDescription = null;

    #[ORM\Column(type: Types::SMALLINT)]
    #[Assert\NotNull]
    private ?int $sortOrder = null;

    #[ORM\Column(length: 1000, nullable: true)]
    #[Assert\Length(max: 1000)]
    private ?string $travel = null;

    #[ORM\Column(length: 100, nullable: true)]
    #[Assert\Length(max: 100)]
    private ?string $updatedBy = null;

    public function __construct()
    {
        $this->places = new ArrayCollection();
    }

    public function addPlace(Place $place): self
    {
        if (!$this->places->contains($place)) {
            $this->places->add($place);
            $place->setCountry($this);
        }

        return $this;
    }

    public function getAlerts(): ?string
    {
        return $this->alerts;
    }

    public function getAtm(): ?string
    {
        return $this->atm;
    }

    public function getBriefDescription(): ?string
    {
        return $this->briefDescription;
    }

    public function getCapital(): ?string
    {
        return $this->capital;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function getCountryName(): ?string
    {
        return $this->countryName;
    }

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function getElectricity(): ?string
    {
        return $this->electricity;
    }

    public function getEntry(): ?string
    {
        return $this->entry;
    }

    public function getGettingAround(): ?string
    {
        return $this->gettingAround;
    }

    public function getImageTags(): array
    {
        return $this->imageTags;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function getLongDescription(): ?string
    {
        return $this->longDescription;
    }

    public function getMobilePhone(): ?string
    {
        return $this->mobilePhone;
    }

    public function getPlaces(): Collection
    {
        return $this->places;
    }

    public function getRanking(): ?int
    {
        return $this->ranking;
    }

    public function getRegion(): ?Region
    {
        return $this->region;
    }

    public function getSafety(): ?string
    {
        return $this->safety;
    }

    public function getSalesTax(): ?string
    {
        return $this->salesTax;
    }

    public function getShortDescription(): ?string
    {
        return $this->shortDescription;
    }

    public function getSortOrder(): ?int
    {
        return $this->sortOrder;
    }

    public function getTravel(): ?string
    {
        return $this->travel;
    }

    public function getUpdatedBy(): ?string
    {
        return $this->updatedBy;
    }

    public function isActive(): ?bool
    {
        return $this->active;
    }

    public function removePlace(Place $place): self
    {
        if ($this->places->removeElement($place)) {
            // set the owning side to null (unless already changed)
            if ($place->getCountry() === $this) {
                $place->setCountry(null);
            }
        }

        return $this;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function setAlerts(?string $alerts): self
    {
        $this->alerts = $alerts;

        return $this;
    }

    public function setAtm(string $atm): self
    {
        $this->atm = $atm;

        return $this;
    }

    public function setBriefDescription(string $briefDescription): self
    {
        $this->briefDescription = $briefDescription;

        return $this;
    }

    public function setCapital(string $capital): self
    {
        $this->capital = $capital;

        return $this;
    }

    public function setCountryCode(string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    public function setCountryName(string $countryName): self
    {
        $this->countryName = $countryName;

        return $this;
    }

    public function setCreatedBy(string $createdBy): void
    {
        $this->createdBy = $createdBy;
    }

    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function setElectricity(string $electricity): self
    {
        $this->electricity = $electricity;

        return $this;
    }

    public function setEntry(?string $entry): self
    {
        $this->entry = $entry;

        return $this;
    }

    public function setGettingAround(?string $gettingAround): self
    {
        $this->gettingAround = $gettingAround;

        return $this;
    }

    public function setImageTags(?array $imageTags): self
    {
        $this->imageTags = $imageTags;

        return $this;
    }

    public function setLanguage(string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function setLongDescription(string $longDescription): self
    {
        $this->longDescription = $longDescription;

        return $this;
    }

    public function setMobilePhone(string $mobilePhone): self
    {
        $this->mobilePhone = $mobilePhone;

        return $this;
    }

    public function setRanking(int $ranking): self
    {
        $this->ranking = $ranking;

        return $this;
    }

    public function setRegion(?Region $region): self
    {
        $this->region = $region;

        return $this;
    }

    public function setSafety(?string $safety): self
    {
        $this->safety = $safety;

        return $this;
    }

    public function setSalesTax(?string $salesTax): self
    {
        $this->salesTax = $salesTax;

        return $this;
    }

    public function setShortDescription(string $shortDescription): self
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    public function setSortOrder(int $sortOrder): self
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    public function setTravel(?string $travel): self
    {
        $this->travel = $travel;

        return $this;
    }

    public function setUpdatedBy(?string $updatedBy): void
    {
        $this->updatedBy = $updatedBy;
    }
}
