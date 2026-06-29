<?php

namespace Entity;




class Models
{
    private int $id;
    private Brands $brand;
    private Categories $category;
    private string $label;
    private ?string $description = null;

    public function getId(): int
    {
        return $this->id;
    }
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getBrand(): Brand
    {
        return $this->brand;
    }
    public function setBrand(Brand $brand): void
    {
        $this->brand = $brand;
    }

    public function getCategoryId(): int
    {
        return $this->categoryId;
    }
    public function setCategoryId(int $categoryId): void
    {
        $this->categoryId = $categoryId;
    }

    public function getLabel(): string
    {
        return $this->label;
    }
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }
}