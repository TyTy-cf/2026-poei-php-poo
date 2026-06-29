<?php

include "/Entity/Sellers.php";
include "/Entity/Models.php";

class Listing
{
    private int $id;
    private Sellers $seller;
    private Model $model;
    private string $title;
    private ?string $description = null;
    private string $produceYear;
    private int $mileage;
    private float $price;
    private DateTime $publishAt;

    public function getId(): int
    {
        return $this->id;
    }
    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getSellerId(): int {
        return $this->sellerId;
    }
    public function setSellerId(int $sellerId): void
    {
        $this->sellerId = $sellerId;
    }

    public function getModelId(): int
    {
        return $this->modelId;
    }
    public function setModelId(int $modelId): void {
        $this->modelId = $modelId;

    }

    public function getTitle(): string
    {
        return $this->title;
    }
    public function setTitle(string $title): void {
        $this->title = $title;
    }

    public function getDescription(): ?string {
        return $this->description;
    }
    public function setDescription(?string $description): void {
        $this->description = $description;

    }

    public function getProduceYear(): string {
        return $this->produceYear;
    }
    public function setProduceYear(string $produceYear): void {
        $this->produceYear = $produceYear;
    }

    public function getMileage(): int {
        return $this->mileage;
    }
    public function setMileage(int $mileage): void {
        $this->mileage = $mileage;
    }

    public function getPrice(): float {
        return $this->price;
    }
    public function setPrice(float $price): void {
        $this->price = $price;
    }

    public function getPublishAt(): DateTime {
        return $this->publishAt;
    }
    public function setPublishAt(DateTime $publishAt): void {
        $this->publishAt = $publishAt;
    }
}