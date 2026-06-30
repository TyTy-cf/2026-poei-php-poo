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

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getProduceYear()
    {
        return $this->produceYear;
    }

    public function setProduceYear($produceYear)
    {
        $this->produceYear = $produceYear;
    }

    public function getMileage()
    {
        return $this->mileage;
    }

    public function setMileage($mileage)
    {
        $this->mileage = $mileage;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPublishAt(): DateTime
    {
        return $this->publishAt;
    }

    public function setPublishAt($publishAt)
    {
        $this->publishAt = $publishAt;
    }

}