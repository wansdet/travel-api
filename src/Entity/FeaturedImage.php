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
use App\Constants\PageType;
use App\Repository\FeaturedImageRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ApiResource(
    operations: [
        new Get(
            normalizationContext: [
                'groups' => ['FeaturedImage:read'],
            ],
        ),
        new GetCollection(
            normalizationContext: [
                'groups' => ['FeaturedImageCollection:read'],
            ],
        ),
        new Post(
            normalizationContext: [
                'groups' => ['FeaturedImage:read'],
            ],
            denormalizationContext: [
                'groups' => ['FeaturedImage:write'],
            ],
        ),
        new Put(
            normalizationContext: [
                'groups' => ['FeaturedImage:read'],
            ],
            denormalizationContext: [
                'groups' => ['FeaturedImage:update'],
            ],
        ),
        new Patch(
            normalizationContext: [
                'groups' => ['FeaturedImage:read'],
            ],
            denormalizationContext: [
                'groups' => ['FeaturedImage:update'],
            ],
        ),
        new Delete(
        ),
    ],
    filters: [
        'featured_image.search_filter',
        'featured_image.order_filter',
    ],
    order: ['sortOrder' => 'ASC'],
    paginationClientItemsPerPage: true,
)]
#[ORM\Entity(repositoryClass: FeaturedImageRepository::class)]
class FeaturedImage
{
    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Length(max: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 20, nullable: true)]
    #[Assert\MaxLength(20)]
    private ?string $destinationCode = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotNull()]
    #[Assert\Length(max: 255)]
    private ?string $filePath = null;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $link = null;

    #[ORM\Column(length: 20)]
    #[Assert\NotNull()]
    #[Assert\Choice(choices: Orientation::ORIENTATIONS)]
    private ?string $orientation = null;

    #[ORM\Column(length: 10)]
    #[Assert\NotNull()]
    #[Assert\Choice(choices: PageType::PAGE_TYPES)]
    private ?string $pageType = null;

    #[ORM\Column(type: Types::SMALLINT)]
    #[Assert\NotNull()]
    private ?int $ranking = null;

    #[ORM\Column(type: Types::SMALLINT)]
    #[Assert\NotNull()]
    private ?int $section = null;

    #[ORM\Column(type: Types::SMALLINT)]
    #[Assert\NotNull()]
    private ?int $sortOrder = null;

    #[ORM\Column(length: 30)]
    #[Assert\NotNull()]
    #[Assert\Length(max: 30)]
    private ?string $title = null;

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getDestinationCode(): ?string
    {
        return $this->destinationCode;
    }

    public function getFilePath(): ?string
    {
        return $this->filePath;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function getOrientation(): ?string
    {
        return $this->orientation;
    }

    public function getPageType(): ?string
    {
        return $this->pageType;
    }

    public function getRanking(): ?int
    {
        return $this->ranking;
    }

    public function getSection(): ?int
    {
        return $this->section;
    }

    public function getSortOrder(): ?int
    {
        return $this->sortOrder;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function setDestinationCode(?string $destinationCode): static
    {
        $this->destinationCode = $destinationCode;

        return $this;
    }

    public function setFilePath(string $filePath): static
    {
        $this->filePath = $filePath;

        return $this;
    }

    public function setLink(?string $link): static
    {
        $this->link = $link;

        return $this;
    }

    public function setOrientation(string $orientation): static
    {
        $this->orientation = $orientation;

        return $this;
    }

    public function setPageType(string $pageType): static
    {
        $this->pageType = $pageType;

        return $this;
    }

    public function setRanking(int $ranking): static
    {
        $this->ranking = $ranking;

        return $this;
    }

    public function setSection(int $section): static
    {
        $this->section = $section;

        return $this;
    }

    public function setSortOrder(int $sortOrder): static
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }
}
