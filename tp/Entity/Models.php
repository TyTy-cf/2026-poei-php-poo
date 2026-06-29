<?php
include_once "./Entity/Brands.php";
include_once "./Entity/Categories.php";
class Models
{
    private int $id;
    private Brands $brand;
    private Categories $category;
    private string $label;
    private string $description;
    public function getId(): int
    {
        return $this->id;
    }
    public function setId(?int $id): void
    {
        $this->id = $id;
    }
    public function getBrand(): Brands
    {
        return $this->brand;
    }
    public function setBrand(Brands $brand): void
    {
        $this->brand = $brand;
    }
    public function getCategory(): Categories
    {
        return $this->category;
    }
    public function setCategory(Categories $category): void
    {
        $this->category = $category;
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
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
}