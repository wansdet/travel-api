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
use App\Constants\Orientation;
use App\Repository\PlaceImageRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ApiResource(
    operations: [
        new Get(
            normalizationContext: [
                'groups' => ['PlaceImage:read'],
            ],
        ),
        new GetCollection(
            normalizationContext: [
                'groups' => ['PlaceImageCollection:read'],
            ],
        ),
        new Post(
            normalizationContext: [
                'groups' => ['PlaceImage:read'],
            ],
            denormalizationContext: [
                'groups' => ['PlaceImage:write'],
            ],
        ),
        new Put(
            normalizationContext: [
                'groups' => ['PlaceImage:read'],
            ],
            denormalizationContext: [
                'groups' => ['PlaceImage:update'],
            ],
        ),
        new Patch(
            normalizationContext: [
                'groups' => ['PlaceImage:read'],
            ],
            denormalizationContext: [
                'groups' => ['PlaceImage:update'],
            ],
        ),
        new Delete(
        ),
    ],
    filters: [
        'place_image.search_filter',
        'place_image.order_filter',
    ],
    order: ['sortOrder' => 'ASC'],
    paginationClientItemsPerPage: true,
)]
#[ORM\Entity(repositoryClass: PlaceImageRepository::class)]
class PlaceImage
{
    #[ORM\Column(length: 2, nullable: true)]
    #[Assert\Length(max: 2)]
    private ?string $countryCode = null;

    #[ORM\Column(length: 50, nullable: true)]
    #[Assert\Length(max: 50)]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Length(max: 255)]
    private ?string $filePath = null;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    #[Assert\Choice(choices: Orientation::ORIENTATIONS)]
    private ?string $orientation = null;

    #[ORM\ManyToOne(inversedBy: 'placeImages')]
    #[ORM\JoinColumn(name: 'place_id', referencedColumnName: 'id', nullable: false)]
    private ?Place $place = null;

    #[ORM\Column(length: 20, nullable: true)]
    #[Assert\Length(max: 20)]
    private ?string $regionCode = null;

    #[ORM\Column(type: Types::SMALLINT)]
    #[Assert\Positive]
    private ?int $sortOrder = null;

    #[ORM\Column(length: 30, nullable: true)]
    #[Assert\Length(max: 30)]
    private ?string $title = null;

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getFilePath(): ?string
    {
        return $this->filePath;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrientation(): ?string
    {
        return $this->orientation;
    }

    public function getPlace(): ?Place
    {
        return $this->place;
    }

    public function getRegionCode(): ?string
    {
        return $this->regionCode;
    }

    public function getSortOrder(): ?int
    {
        return $this->sortOrder;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setCountryCode(?string $countryCode): static
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function setFilePath(?string $filePath): static
    {
        $this->filePath = $filePath;

        return $this;
    }

    public function setOrientation(string $orientation): static
    {
        $this->orientation = $orientation;

        return $this;
    }

    public function setPlace(?Place $place): static
    {
        $this->place = $place;

        return $this;
    }

    public function setRegionCode(?string $regionCode): static
    {
        $this->regionCode = $regionCode;

        return $this;
    }

    public function setSortOrder(int $sortOrder): static
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    public function setTitle(?string $title): static
    {
        $this->title = $title;

        return $this;
    }
}
