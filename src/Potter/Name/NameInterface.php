<?php

declare(strict_types=1);

namespace Potter\Name;

interface NameInterface
{
    public function getName(): string;
    public function hasName(): bool;
    public function withName(?string $name = null): static;
    public function withoutName(): static;
}
