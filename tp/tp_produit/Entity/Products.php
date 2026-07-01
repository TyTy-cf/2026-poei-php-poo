<?php

namespace Tp\tp_produit\Entity;

use Tp\tp_centraleish\Entity\Categories;

class Products
{
    private int $id;

    private Categories $category;

    private string $label;

    private string $description;

    private float $price;

    private string $publish_at;


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

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getCategory(): Categories
    {
        return $this->category;
    }

    public function setCategory(Categories $category): void
    {
        $this->category = $category;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getPublishAt(): string
    {
        return $this->publish_at;
    }

    public function setPublishAt(string $publish_at): void
    {
        $this->publish_at = $publish_at;
    }
}