<?php

class Category
{

    private int $id;

    private string $label;

    private string $description;

    private DateTime $createdAt;

    private string $image;

    private bool $isActive;

    private ?Category $parent = null;

    private array $children = [];

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
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