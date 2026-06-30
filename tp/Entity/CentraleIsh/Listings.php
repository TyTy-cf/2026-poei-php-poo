<?php

namespace CentraleIsh;

use CentraleIsh\Traits\TraitBasicsTitled;
use DateTime;

include_once "Traits/TraitBasicsTitled.php";

class Listings
{
    use TraitBasicsTitled;
    private Sellers $seller;
    private Models $model;
    private string $produceYear;
    private int $mileage;
    private float $price;
    private DateTime $publishAt;

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

    public function getProduceYear(): string
    {
        return $this->produceYear;
    }

    public function setProduceYear(string $produceYear): void
    {
        $this->produceYear = $produceYear;
    }

    public function getMileage(): int
    {
        return $this->mileage;
    }

    public function setMileage(int $mileage): void
    {
        $this->mileage = $mileage;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getPublishAt(): DateTime
    {
        return $this->publishAt;
    }

    public function setPublishAt(DateTime $publishAt): void
    {
        $this->publishAt = $publishAt;
    }
}