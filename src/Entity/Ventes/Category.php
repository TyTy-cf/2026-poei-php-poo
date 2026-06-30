<?php

include_once "Traits/EntityTrait.php";
include_once "Traits/TimestampTrait.php";

class Category
{

    use EntityTrait;
    use TimestampTrait;

    private string $description;

    private string $image;

    private bool $isActive;

    private ?Category $parent = null;

    private array $children = [];

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    public function isActive(): bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): void
    {
        $this->isActive = $isActive;
    }

    public function getParent(): ?Category
    {
        return $this->parent;
    }

    public function setParent(?Category $parent): void
    {
        $this->parent = $parent;
        $parent->children[] = $this;
    }

    public function addChildren(Category $child): void
    {
        $this->children[] = $child;
        $child->parent = $this;
    }

    public function getChildren(): array
    {
        return $this->children;
    }

}