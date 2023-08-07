<?php

declare(strict_types=1);

namespace App\Entity;

interface AuthoredEntityInterface
{
    public function setCreatedBy(string $createdBy): void;

    public function setUpdatedBy(string $updatedBy): void;
}
