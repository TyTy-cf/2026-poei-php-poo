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

private Sellers $seller;

private Models $model;



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

    public function getSeller(): Sellers
    {
        return $this->seller;
    }

    public function getModel(): Models
    {
        return $this->model;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setProduceYear($produce_year)
    {
        $this->produce_year = $produce_year;
    }

    public function setMileage($mileage)
    {
        $this->mileage = $mileage;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setPublishAt($publish_at)
    {
        $this->publish_at = $publish_at;
    }

    public function setSeller(Sellers $seller)
    {
        $this->seller = $seller;
    }

    public function setModel(Models $model)
    {
        $this->model = $model;
    }



}
