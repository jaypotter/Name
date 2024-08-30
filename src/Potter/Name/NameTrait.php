<?php

declare(strict_types=1);

namespace Potter\Name;

trait NameTrait 
{
    private const string NAME = 'name';
    private string $name;
    
    final public function getName(): string
    {
        return $this->get(self::NAME);
    }
        
    final public function hasName(): bool
    {
        return $this->has(self::NAME);
    }
    
    final protected function setName(?string $name = null): ?string
    {
        if (is_null($name)) {
            $this->unsetName();
            return null;
        }
        return $this->set(self::NAME, $name);
    }
    
    final protected function unsetName(): void
    {
        $this->unset(self::NAME);
    }
    
    final public function withName(?string $name = null): static
    {
        if (is_null($name)) {
            return $this->withoutName();
        }
        return $this->with(self::NAME, $name);
    }
    
    final public function withoutName(): static
    {
        return $this->without(self::NAME);
    }
    
    abstract public function get(string $var): mixed;
    abstract public function has(string $var): bool;
    abstract protected function set(string $var, mixed $val): mixed;
    abstract protected function unset(string $var): void;
    abstract public function with(string $var, mixed $val): static;
    abstract public function without(string $var): static;
}
