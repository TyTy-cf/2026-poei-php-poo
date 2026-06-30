<?php

namespace Entity;

use DateTime;

class Product
{
    private int $id;
    private string $name;
    private Sellers $seller;
    private DateTime $publishedAt;
    private int $price;
    private array $categories;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getSeller(): Sellers
    {
        return $this->seller;
    }

    public function setSeller(Sellers $seller): void
    {
        $this->seller = $seller;
    }

    public function getPublishedAt(): DateTime
    {
        return $this->publishedAt;
    }

    public function setPublishedAt(DateTime $publishedAt): void
    {
        $this->publishedAt = $publishedAt;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    public function getCategories(): array
    {
        return $this->categories;
    }

    public function addCategory(Categories $category): void
    {
        $this->categories[] = $category;
    }
}