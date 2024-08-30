# Name
PHP Name Interface

```php
public function getName(): string;
public function hasName(): bool;
protected function setName(?string $name = null): ?string;
protected function unsetName(): void;
public function withName(?string $name = nulll): static;
public function withoutName(): static;
