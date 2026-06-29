<?php

class Listings
{

    private int $id;
    private string $title;
    private string $description;
    private string $produceYear;
    private int $mileage;
    private float $price;
    private DateTime $publishAt;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
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