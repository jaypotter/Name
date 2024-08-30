<?php

declare(strict_types=1);

namespace Potter\Name;

abstract class AbstractName 
{
    abstract public function getName(): string;
    abstract public function hasName(): bool;
    abstract protected function setName(?string $name = null): ?string;
    abstract protected function unsetName(): void;
    abstract public function withName(?string $name = nulll): static;
    abstract public function withoutName(): static;
}
