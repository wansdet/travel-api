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
use App\Constants\PageType;
use App\Repository\FeaturedDestinationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ApiResource(
    operations: [
        new Get(
            normalizationContext: [
                'groups' => ['FeaturedDestination:read'],
            ],
        ),
        new GetCollection(
            normalizationContext: [
                'groups' => ['FeaturedDestinationCollection:read'],
            ],
        ),
        new Post(
            normalizationContext: [
                'groups' => ['FeaturedDestination:read'],
            ],
            denormalizationContext: [
                'groups' => ['FeaturedDestination:write'],
            ],
        ),
        new Put(
            normalizationContext: [
                'groups' => ['FeaturedDestination:read'],
            ],
            denormalizationContext: [
                'groups' => ['FeaturedDestination:update'],
            ],
        ),
        new Patch(
            normalizationContext: [
                'groups' => ['FeaturedDestination:read'],
            ],
            denormalizationContext: [
                'groups' => ['FeaturedDestination:update'],
            ],
        ),
        new Delete(
        ),
    ],
    filters: [
        'featured_destination.search_filter',
        'featured_destination.order_filter',
    ],
    order: ['sortOrder' => 'ASC'],
    paginationClientItemsPerPage: true,
)]
#[ORM\Entity(repositoryClass: FeaturedDestinationRepository::class)]
class FeaturedDestination
{
    #[ORM\Column(length: 255)]
    #[Assert\NotNull()]
    #[Assert\Length(max: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 20, nullable: true)]
    #[Assert\Length(max: 20)]
    private ?string $destinationCode = null;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    #[Assert\NotNull()]
    #[Assert\Choice(choices: PageType::PAGE_TYPES)]
    private ?string $pageType = null;

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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPageType(): ?string
    {
        return $this->pageType;
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

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function setDestinationCode(?string $destinationCode): static
    {
        $this->destinationCode = $destinationCode;

        return $this;
    }

    public function setPageType(string $pageType): static
    {
        $this->pageType = $pageType;

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
