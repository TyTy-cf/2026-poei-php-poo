<?php

namespace Vente;

use Vente\Traits\{TraitEntity, TraitTimestamps};

include_once "Traits/TraitEntity.php";
include_once "Traits/TraitTimestamps.php";


class Product
{
    use TraitEntity;
    use TraitTimestamps;
    private string $brand;
    private string $eanCode;
    private int $price;
    private int $sale = 0;
    private string $imageURl;

    /**
     * @var array<Category> $categories
     */
    private array $categories = [];
    private bool $isActive;

    /**
     * @var array<Characteristic> $characteristics
     */
    private array $characteristics = [];

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    /**
     * @return array<Category>
     */
    public function getCategories(): array
    {
        return $this->categories;
    }

    public function addCategory(Category $category): void
    {
        $this->categories[] = $category;
    }

    public function getImageURl(): string
    {
        return $this->imageURl;
    }

    public function setImageURl(string $imageURl): void
    {
        $this->imageURl = $imageURl;
    }

    public function isActive(): bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): void
    {
        $this->isActive = $isActive;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    public function getEanCode(): string
    {
        return $this->eanCode;
    }

    public function setEanCode(string $eanCode): void
    {
        $this->eanCode = $eanCode;
    }

    public function getSale(): int
    {
        return $this->sale;
    }

    public function setSale(int $sale): void
    {
        $this->sale = $sale;
    }

    /**
     * @return array<Characteristic>
     */
    public function getCharacteristics(): array
    {
        return $this->characteristics;
    }

    public function addCharacteristic(Characteristic $characteristic): void
    {
        $this->characteristics[] = $characteristic;
    }


}