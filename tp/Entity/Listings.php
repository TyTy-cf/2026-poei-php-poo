<?php


class Listings
{
    private int $id;

    private string $title;

    private string $description;

    private string $produce_year;

    private int $mileage;

    private float $price;

    private DateTime $publish_at;


    public function getId() : int
    {
        return $this->id;
    }

    public function getTitle() : string
    {
        return $this->title;
    }


    public function getDescription() : string
    {
        return $this->description;
    }

    public function getProduceYear() : string
    {
        return $this->produce_year;
    }

    public function getMileage() : int
    {
        return $this->mileage;
    }

    public function getPrice() : float
    {
        return $this->price;
    }

    public function getPublishAt() : DateTime
    {
        return $this->publish_at;
    }
}

$listing = new Listings();