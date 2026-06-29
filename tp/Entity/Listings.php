<?php
class Listings
{
    private int $id;
    private Sellers $seller;
    private Models $model;
    private string $title;
    private string $description;
    private string $produce_year;
    private int $mileage;
    private float $price;
    private Datetime $publish_at;

    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getSeller(): Sellers
    {
        return $this->seller;
    }

    public function setSeller(Sellers $seller): void
    {
        $this->seller = $seller;
    }

    public function getModel(): Models
    {
        return $this->model;
    }

    public function setModel(Models $model): void
    {
        $this->model = $model;
    }

    public function getTitle(): string{
        return $this->title;
    }
    public function setTitle(string $title): void{
        $this->title = $title;
    }
    public function getDescription(): string{
        return $this->description;
    }
    public function setDescription(string $description): void{
        $this->description = $description;
    }
    public function getProduce_year(): string{
        return $this->produce_year;
    }
    public function setProduce_year(string $produce_year): void{
        $this->produce_year = $produce_year;
    }
    public function getMileage(): int{
        return $this->mileage;
    }
    public function setMileage(int $mileage): void{
        $this->mileage = $mileage;
    }
    public function getPrice(): float{
        return $this->price;
    }
    public function setPrice(float $price): void{
        $this->price = $price;
    }
    public function getPublish_at(): Datetime{
        return $this->publish_at;
    }
    public function setPublish_at(Datetime $publish_at): void{
        $this->publish_at = $publish_at;
    }
}