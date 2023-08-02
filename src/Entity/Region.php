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
use App\Repository\RegionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ApiResource(
    operations: [
        new Get(
            normalizationContext: [
                'groups' => ['Region:read'],
            ],
        ),
        new GetCollection(
            normalizationContext: [
                'groups' => ['RegionCollection:read'],
            ],
        ),
        new Post(
            normalizationContext: [
                'groups' => ['Region:read'],
            ],
            denormalizationContext: [
                'groups' => ['Region:write'],
            ],
        ),
        new Put(
            normalizationContext: [
                'groups' => ['Region:read'],
            ],
            denormalizationContext: [
                'groups' => ['Region:update'],
            ],
        ),
        new Patch(
            normalizationContext: [
                'groups' => ['Region:read'],
            ],
            denormalizationContext: [
                'groups' => ['Region:update'],
            ],
        ),
        new Delete(
        ),
    ],
    filters: [
        'region.order_filter',
    ],
    order: ['regionName' => 'ASC'],
    paginationClientItemsPerPage: true,
)]
#[ORM\Entity(repositoryClass: RegionRepository::class)]
class Region
{
    use TimestampsTrait;

    #[ORM\Column(length: 500)]
    #[Assert\NotNull]
    #[Assert\Length(max: 500)]
    private ?string $briefDescription = null;

    #[ORM\OneToMany(mappedBy: 'region', targetEntity: Country::class)]
    private Collection $countries;

    #[ORM\Column(length: 100)]
    #[Assert\NotNull]
    #[Assert\Length(max: 100)]
    private ?string $createdBy = null;

    #[ORM\Column(nullable: true)]
    private array $imageTags = [];

    #[ORM\Column(length: 4000)]
    #[Assert\NotNull]
    #[Assert\Length(max: 4000)]
    private ?string $longDescription = null;

    #[ORM\Column(type: Types::SMALLINT)]
    #[Assert\NotNull]
    private ?int $ranking = null;

    #[ORM\Id]
    #[ORM\Column(name: 'region_code', type: 'string', length: 20, nullable: false)]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[Assert\NotNull]
    #[Assert\Length(min: 2, max: 20)]
    #[ApiProperty(identifier: true)]
    private ?string $regionCode = null;

    #[ORM\Column(type: 'string', length: 20)]
    #[Assert\NotNull]
    #[Assert\Length(max: 20)]
    private ?string $regionName = null;

    #[ORM\Column(length: 2000)]
    #[Assert\NotNull]
    #[Assert\Length(max: 2000)]
    private ?string $shortDescription = null;

    #[ORM\Column(type: Types::SMALLINT)]
    #[Assert\NotNull]
    private ?int $sortOrder = null;

    #[ORM\Column(length: 100, nullable: true)]
    #[Assert\Length(max: 100)]
    private ?string $updatedBy = null;

    public function __construct()
    {
        $this->countries = new ArrayCollection();
    }

    public function addCountry(Country $country): static
    {
        if (!$this->countries->contains($country)) {
            $this->countries->add($country);
            $country->setRegion($this);
        }

        return $this;
    }

    public function getBriefDescription(): ?string
    {
        return $this->briefDescription;
    }

    /**
     * @return Collection<int, Country>
     */
    public function getCountries(): Collection
    {
        return $this->countries;
    }

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function getImageTags(): array
    {
        return $this->imageTags;
    }

    public function getLongDescription(): ?string
    {
        return $this->longDescription;
    }

    public function getRanking(): ?int
    {
        return $this->ranking;
    }

    public function getRegionCode(): ?string
    {
        return $this->regionCode;
    }

    public function getRegionName(): ?string
    {
        return $this->regionName;
    }

    public function getShortDescription(): ?string
    {
        return $this->shortDescription;
    }

    public function getSortOrder(): ?int
    {
        return $this->sortOrder;
    }

    public function getUpdatedBy(): ?string
    {
        return $this->updatedBy;
    }

    public function removeCountry(Country $country): static
    {
        if ($this->countries->removeElement($country)) {
            // set the owning side to null (unless already changed)
            if ($country->getRegion() === $this) {
                $country->setRegion(null);
            }
        }

        return $this;
    }

    public function setBriefDescription(string $briefDescription): static
    {
        $this->briefDescription = $briefDescription;

        return $this;
    }

    public function setCreatedBy(string $createdBy): static
    {
        $this->createdBy = $createdBy;

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

    public function setRanking(int $ranking): static
    {
        $this->ranking = $ranking;

        return $this;
    }

    public function setRegionCode(string $regionCode): static
    {
        $this->regionCode = $regionCode;

        return $this;
    }

    public function setRegionName(string $regionName): static
    {
        $this->regionName = $regionName;

        return $this;
    }

    public function setShortDescription(string $shortDescription): static
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    public function setSortOrder(int $sortOrder): static
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    public function setUpdatedBy(?string $updatedBy): static
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }
}
