<?php

class Listings
{

  private int $id;
  private int $seller_id;
  private int $model_id;
  private string $title;
  private string $description;
  private string $produce_year;
  private int $mileage;
  private string $price;
  private DateTime $publish_at;


  public function getId(): int
  {
    return $this->id;
  }

  public function setId(int $id): void
  {
    $this->id = $id;
  }

  public function getSellerId(): int
  {
    return $this->seller_id;
  }

  public function setSellerId(int $id): void
  {
    // I have no idea
  }

  public function getModelId(): int
  {
    return $this->model_id;
  }

  public function setModelId(int $id): void
  {
    // I have no idea
  }


  public function getTitle(): ?string
  {
    return $this->title;
  }

  public function setTitle(?string $title): void
  {
    $this->title = $title;
  }

  public function getDescription(): ?string
  {
    return $this->description;
  }

  public function setDescription(?string $description): void
  {
    $this->description = $description;
  }

  public function getProduceYear(): ?string
  {
    return $this->produce_year;
  }

  public function setProduceYear(?string $produce_year): void
  {
    $this->produce_year = $produce_year;
  }

  public function getMileage(): ?int
  {
    return $this->mileage;
  }

  public function setMileage(?int $mileage): void
  {
    $this->mileage = $mileage;
  }

  public function getPrice(): ?float
  {
    return $this->price;
  }

  public function setPrice(?float $price): void
  {
    $this->price = $price;
  }

  public function getPublishAt(): ?DateTime
  {
    return $this->publish_at;
  }

  public function setPublishAt(?DateTime $publish_at): void
  {
    $this->publish_at = $publish_at;
  }
}
