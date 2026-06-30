<?php

include_once "./Traits/Common.php";

class Listings
{

    use Common;

    private Sellers $seller;

    private Models $model;

    private string $title;

    private string $description;

    private string $produceYear;

    private int $mileage;

    private float $price;

    private DateTime $publish_at;

    // Getters

    public function getSeller(): ?Sellers {
        return $this->seller;
    }

    public function getModel(): ?Models {
        return $this->model;
    }

    public function getTitle(): ?string {
        return $this->title;
    }

    public function getDescription(): ?string {
        return $this->description;
    }

    public function getProduceYear(): ?string {
        return $this->produceYear;
    }

    public function getMileage(): ?int {
        return $this->mielage;
    }

    public function getPrice(): ?float {
        return $this->price;
    }

    public function getPublishAt(): ?DateTime {
        return $this->publish_at;
    }

    // Setters

    public function setSeller(Sellers $seller): void {
        $this->seller = $seller;
    }

    public function setModel(Models $model): void {
        $this->model = $model;
    }
    
    public function setTitle(string $title): void {
        $this->title = $title;
    }

    public function setDescription(string $description): void {
        $this->description = $description;
    }

    public function setProduceYear(string $produceYear): void {
        $this->produceYear = $produceYear;
    }

    public function setMileage(int $mileage): void {
        $this->mileage = $mileage;
    }

    public function setPrice(float $price): void {
        $this->price = $price;
    }

    public function setPublishAt(DateTime $publish_at): void {
        $this->publish_at = $publish_at;
    }
}

?>