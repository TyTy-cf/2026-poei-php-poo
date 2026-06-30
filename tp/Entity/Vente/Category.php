<?php

namespace Vente;

use Vente\Traits\{TraitEntity, TraitTimestamps};

include_once "Traits/TraitEntity.php";
include_once "Traits/TraitTimestamps.php";

class Category
{
    use TraitEntity;
    use TraitTimestamps;

    private ?string $description;
    private ?string $imageUrl;
    private ?Category $parent = null;
    private bool $isActive;

    /**
     * @var array<Category> $children
     */
    private array $children = [];

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(?string $imageUrl): void
    {
        $this->imageUrl = $imageUrl;
    }

    public function getParent(): ?Category
    {
        return $this->parent;
    }

    public function setParent(Category $parent): void
    {
        $this->parent = $parent;
        $parent->addChild($this);
    }

    public function isActive(): bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): void
    {
        $this->isActive = $isActive;
    }

    /**
     * @return array<Category>
     */
    public function getChildren(): array
    {
        return $this->children;
    }

    private function addChild(Category $child): void
    {
        $this->children[] = $child;
    }

}