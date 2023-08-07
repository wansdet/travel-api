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
use App\Repository\UserRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Uid\Uuid;
use Symfony\Component\Validator\Constraints as Assert;

#[ApiResource(
    operations: [
        new Get(
            security: 'is_granted("ROLE_MODERATOR") or (is_granted("IS_AUTHENTICATED_FULLY") and object.getUserIdentifier() == user.getUserIdentifier())',
        ),
        new GetCollection(
            normalizationContext: [
                'groups' => ['UserCollection:read'],
            ],
            security: 'is_granted("ROLE_MODERATOR")',
        ),
        new Post(
            denormalizationContext: [
                'groups' => ['User:write'],
            ],
            security: 'is_granted("ROLE_ADMIN") or (is_granted("IS_AUTHENTICATED_FULLY") and object.getUserIdentifier() == user.getUserIdentifier())',
        ),
        new Put(
            denormalizationContext: [
                'groups' => ['User:update'],
            ],
            security: 'is_granted("ROLE_ADMIN") or (is_granted("IS_AUTHENTICATED_FULLY") and object.getUserIdentifier() == user.getUserIdentifier())',
        ),
        new Patch(
            denormalizationContext: [
                'groups' => ['User:update'],
            ],
            security: 'is_granted("ROLE_ADMIN") or (is_granted("IS_AUTHENTICATED_FULLY") and object.getUserIdentifier() == user.getUserIdentifier())',
        ),
        new Delete(
            security: 'is_granted("ROLE_ADMIN")',
        ),
    ],
    normalizationContext: [
        'groups' => ['User:read'],
    ],
    filters: [
        'user.order_filter',
    ],
    paginationClientItemsPerPage: true,
)]
#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\HasLifecycleCallbacks]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface, AuthoredEntityInterface
{
    use TimestampsTrait;

    public const ROLE_ADMIN = 'ROLE_ADMIN';

    public const ROLE_BLOG_AUTHOR = 'ROLE_BLOG_AUTHOR';

    public const ROLE_EDITOR = 'ROLE_EDITOR';

    public const ROLE_MODERATOR = 'ROLE_MODERATOR';

    public const ROLE_USER = 'ROLE_USER';

    public const SEX_FEMALE = 'female';

    public const SEX_MALE = 'male';

    public const SEX_NOT_SPECIFIED = 'not_specified';

    public const SEXES = [
        self::SEX_NOT_SPECIFIED,
        self::SEX_FEMALE,
        self::SEX_MALE,
    ];

    public const USER_ROLES = [
        self::ROLE_ADMIN,
        self::ROLE_EDITOR,
        self::ROLE_MODERATOR,
        self::ROLE_BLOG_AUTHOR,
        self::ROLE_USER,
    ];

    public const USER_STATUS_ACTIVE = 'active';

    public const USER_STATUS_ON_HOLD = 'on_hold';

    public const USER_STATUS_PENDING = 'pending';

    public const USER_STATUS_SUSPENDED = 'suspended';

    public const USER_STATUSES = [
        self::USER_STATUS_ACTIVE,
        self::USER_STATUS_ON_HOLD,
        self::USER_STATUS_PENDING,
        self::USER_STATUS_SUSPENDED,
    ];

    #[ORM\Column(length: 100)]
    #[Assert\Length(max: 100)]
    private ?string $createdBy = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $displayName = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dob = null;

    #[ORM\Column(length: 180)]
    #[Assert\NotNull]
    #[Assert\Email]
    #[Assert\Length(max: 180)]
    private ?string $email = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotNull]
    #[Assert\Length(min: 2, max: 50)]
    private ?string $firstName = null;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[ApiProperty(identifier: false)]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotNull]
    #[Assert\Length(min: 2, max: 50)]
    private ?string $lastName = null;

    #[ORM\Column(length: 50, nullable: true)]
    #[Assert\Length(min: 2, max: 50)]
    private ?string $middleName = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotNull]
    private ?string $password = null;

    #[ORM\Column]
    #[Assert\Choice(choices: self::USER_ROLES, multiple: true)]
    private array $roles = [];

    #[ORM\Column(length: 20, nullable: true)]
    #[Assert\Choice(choices: self::SEXES)]
    private ?string $sex = null;

    #[ORM\Column(length: 10)]
    #[Assert\Choice(choices: self::USER_STATUSES)]
    private ?string $status = null;

    #[ORM\Column(length: 100, nullable: true)]
    #[Assert\Length(max: 100)]
    private ?string $updatedBy = null;

    #[ORM\Column(type: 'uuid', unique: true)]
    #[ApiProperty(identifier: true)]
    private ?Uuid $userId = null;

    public function __construct()
    {
        $this->userId = Uuid::v4();
        $this->status = self::USER_STATUS_ACTIVE;

        // On creation guarantee every user at least has ROLE_USER
        $this->roles[] = 'ROLE_USER';
    }

    public function eraseCredentials(): void
    {
        // TODO: Implement eraseCredentials() method.
    }

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function getDob(): ?\DateTimeInterface
    {
        return $this->dob;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }

    public function getName(): string
    {
        return sprintf('%s %s', $this->firstName, $this->lastName);
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function getRoles(): array
    {
        return $this->roles;
    }

    public function getSex(): ?string
    {
        return $this->sex;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function getUpdatedBy(): ?string
    {
        return $this->updatedBy;
    }

    public function getUserId(): ?Uuid
    {
        return $this->userId;
    }

    public function getUserIdentifier(): string
    {
        return $this->email;
    }

    public function setCreatedBy(string $createdBy): void
    {
        $this->createdBy = $createdBy;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;

        return $this;
    }

    public function setDob(?\DateTimeInterface $dob): self
    {
        $this->dob = $dob;

        return $this;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function setMiddleName(?string $middleName): self
    {
        $this->middleName = $middleName;

        return $this;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    public function setSex(string $sex): self
    {
        $this->sex = $sex;

        return $this;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function setUpdatedBy(?string $updatedBy): void
    {
        $this->updatedBy = $updatedBy;
    }

    public function setUserId(Uuid $userId): self
    {
        $this->userId = $userId;

        return $this;
    }
}
