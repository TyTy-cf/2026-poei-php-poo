<?php

include_once "Traits/EntityTrait.php";
include_once "Traits/TimestampTrait.php";

class Product
{

    use EntityTrait;
    use TimestampTrait;

    private string $brand;

    private string $ean;

    private int $price; // en centimes

    private string $description;

    private array $images = [];

    /**
     * @var array<Characteristic> $characteristics
     */
    private array $characteristics = [];

    private bool $isActive;

    private Category $category;

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

    public function getParent(): ?Product
    {
        return $this->parent;
    }

    public function setParent(?Product $parent): void
    {
        $this->parent = $parent;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    public function getEan(): string
    {
        return $this->ean;
    }

    public function setEan(string $ean): void
    {
        $this->ean = $ean;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    public function getImages(): array
    {
        return $this->images;
    }

    public function setImages(array $images): void
    {
        $this->images = $images;
    }

    public function getCharacteristics(): array
    {
        return $this->characteristics;
    }

    public function setCharacteristics(array $characteristics): void
    {
        $this->characteristics = $characteristics;
    }

    public function addCharacteristic(Characteristic $characteristic): void
    {
        $this->characteristics[] = $characteristic;
        $characteristic->setProduct($this);
    }

    public function getCategory(): Category
    {
        return $this->category;
    }

    public function setCategory(Category $category): void
    {
        $this->category = $category;
    }

}