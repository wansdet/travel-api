<?php

declare(strict_types=1);

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Delete;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Patch;
use ApiPlatform\Metadata\Post;
use ApiPlatform\Metadata\Put;
use App\Repository\PlaceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ApiResource(
    operations: [
        new Get(
            normalizationContext: [
                'groups' => ['Place:read'],
            ],
        ),
        new GetCollection(
            normalizationContext: [
                'groups' => ['PlaceCollection:read'],
            ],
        ),
        new Post(
            normalizationContext: [
                'groups' => ['Place:read'],
            ],
            denormalizationContext: [
                'groups' => ['Place:write'],
            ],
        ),
        new Put(
            normalizationContext: [
                'groups' => ['Place:read'],
            ],
            denormalizationContext: [
                'groups' => ['Place:update'],
            ],
        ),
        new Patch(
            normalizationContext: [
                'groups' => ['Place:read'],
            ],
            denormalizationContext: [
                'groups' => ['Place:update'],
            ],
        ),
        new Delete(
        ),
    ],
    filters: [
        'place.search_filter',
        'place.order_filter',
    ],
    order: ['id' => 'ASC'],
    paginationClientItemsPerPage: true,
)]
#[ORM\Entity(repositoryClass: PlaceRepository::class)]
class Place
{
    use TimestampsTrait;

    #[ORM\Column(length: 2000, nullable: true)]
    #[Assert\Length(max: 2000)]
    private ?string $accommodation = null;

    #[ORM\Column(length: 1000)]
    #[Assert\NotBlank]
    #[Assert\Length(min: 3, max: 1000)]
    private ?string $bestTimeToVisit = null;

    #[ORM\Column(length: 500)]
    #[Assert\NotNull]
    #[Assert\Length(max: 500)]
    private ?string $briefDescription = null;

    #[ORM\ManyToOne(inversedBy: 'places')]
    #[ORM\JoinColumn(name: 'country_code', referencedColumnName: 'country_code', nullable: false)]
    private ?Country $country = null;

    #[ORM\Column(length: 100, nullable: true)]
    #[Assert\NotBlank]
    #[Assert\Length(min: 3, max: 100)]
    private ?string $countryRegion = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank]
    #[Assert\Length(min: 3, max: 100)]
    private ?string $createdBy = null;

    #[ORM\Column(length: 1500, nullable: true)]
    #[Assert\Length(max: 1500)]
    private ?string $dayTrips = null;

    #[ORM\Column(length: 2000, nullable: true)]
    #[Assert\Length(max: 2000)]
    private ?string $food = null;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private array $imageTags = [];

    #[ORM\Column(length: 4000)]
    #[Assert\NotNull]
    #[Assert\Length(max: 4000)]
    private ?string $longDescription = null;

    #[ORM\Column(length: 20, nullable: true)]
    #[Assert\Length(max: 20)]
    private ?string $placeCode = null;

    #[ORM\OneToMany(mappedBy: 'place', targetEntity: PlaceImage::class)]
    private Collection $placeImages;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank]
    #[Assert\Length(min: 3, max: 100)]
    private ?string $placeName = null;

    #[ORM\Column(type: Types::SMALLINT)]
    #[Assert\NotNull]
    private ?int $ranking = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Length(max: 255)]
    private ?string $safety = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Length(min: 3, max: 255)]
    private ?string $slug = null;

    #[ORM\Column(type: Types::SMALLINT)]
    #[Assert\NotNull]
    private ?int $sortOrder = null;

    #[ORM\Column(nullable: true)]
    private array $tags = [];

    #[ORM\Column(length: 1500)]
    #[Assert\NotNull]
    #[Assert\Length(max: 1500)]
    private ?string $thingsToDo = null;

    #[ORM\Column(length: 1000)]
    #[Assert\NotNull]
    #[Assert\Length(max: 1000)]
    private ?string $travelInformation = null;

    #[ORM\Column(length: 100, nullable: true)]
    #[Assert\Length(min: 3, max: 100)]
    private ?string $updatedBy = null;

    #[ORM\Column(type: Types::SMALLINT)]
    #[Assert\NotNull]
    private ?int $worldRanking = null;

    public function __construct()
    {
        $this->placeImages = new ArrayCollection();
    }

    public function getAccommodation(): ?string
    {
        return $this->accommodation;
    }

    public function getBestTimeToVisit(): ?string
    {
        return $this->bestTimeToVisit;
    }

    public function getBriefDescription(): ?string
    {
        return $this->briefDescription;
    }

    public function getCountry(): ?Country
    {
        return $this->country;
    }

    public function getCountryRegion(): ?string
    {
        return $this->countryRegion;
    }

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function getDayTrips(): ?string
    {
        return $this->dayTrips;
    }

    public function getFood(): ?string
    {
        return $this->food;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImageTags(): array
    {
        return $this->imageTags;
    }

    public function getLongDescription(): ?string
    {
        return $this->longDescription;
    }

    public function getPlaceCode(): ?string
    {
        return $this->placeCode;
    }

    /**
     * @return Collection<int, PlaceImage>
     */
    public function getPlaceImages(): Collection
    {
        return $this->placeImages;
    }

    public function getPlaceName(): ?string
    {
        return $this->placeName;
    }

    public function getRanking(): ?int
    {
        return $this->ranking;
    }

    public function getSafety(): ?string
    {
        return $this->safety;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function getSortOrder(): ?int
    {
        return $this->sortOrder;
    }

    public function getTags(): array
    {
        return $this->tags;
    }

    public function getThingsToDo(): ?string
    {
        return $this->thingsToDo;
    }

    public function getTravelInformation(): ?string
    {
        return $this->travelInformation;
    }

    public function getUpdatedBy(): ?string
    {
        return $this->updatedBy;
    }

    public function getWorldRanking(): ?int
    {
        return $this->worldRanking;
    }

    public function setAccommodation(?string $accommodation): static
    {
        $this->accommodation = $accommodation;

        return $this;
    }

    public function setBestTimeToVisit(string $bestTimeToVisit): static
    {
        $this->bestTimeToVisit = $bestTimeToVisit;

        return $this;
    }

    public function setBriefDescription(string $briefDescription): static
    {
        $this->briefDescription = $briefDescription;

        return $this;
    }

    public function setCountry(?Country $country): static
    {
        $this->country = $country;

        return $this;
    }

    public function setCountryRegion(?string $countryRegion): static
    {
        $this->countryRegion = $countryRegion;

        return $this;
    }

    public function setCreatedBy(string $createdBy): static
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    public function setDayTrips(?string $dayTrips): static
    {
        $this->dayTrips = $dayTrips;

        return $this;
    }

    public function setFood(?string $food): static
    {
        $this->food = $food;

        return $this;
    }

    public function setImageTags(?array $imageTags): static
    {
        $this->imageTags = $imageTags;

        return $this;
    }

    public function setLongDescription(string $longDescription): static
    {
        $this->longDescription = $longDescription;

        return $this;
    }

    public function setPlaceCode(?string $placeCode): static
    {
        $this->placeCode = $placeCode;

        return $this;
    }

    public function setPlaceName(string $placeName): static
    {
        $this->placeName = $placeName;

        return $this;
    }

    public function setRanking(int $ranking): static
    {
        $this->ranking = $ranking;

        return $this;
    }

    public function setSafety(?string $safety): static
    {
        $this->safety = $safety;

        return $this;
    }

    public function setSlug(string $slug): static
    {
        $this->slug = $slug;

        return $this;
    }

    public function setSortOrder(int $sortOrder): static
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    public function setTags(?array $tags): static
    {
        $this->tags = $tags;

        return $this;
    }

    public function setThingsToDo(string $thingsToDo): static
    {
        $this->thingsToDo = $thingsToDo;

        return $this;
    }

    public function setTravelInformation(string $travelInformation): static
    {
        $this->travelInformation = $travelInformation;

        return $this;
    }

    public function setUpdatedBy(?string $updatedBy): static
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    public function setWorldRanking(int $worldRanking): static
    {
        $this->worldRanking = $worldRanking;

        return $this;
    }
}
