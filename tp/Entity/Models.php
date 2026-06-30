<?php
include_once 'Brands.php';
include_once 'Categories.php';
include_once "Traits/EntityTrait.php";

class Models
{
    use EntityTrait;

    private Brands $brand;
    private Categories $category;



    public function getBrand(): Brands
    {
        return $this->brand;
    }

    public function setBrand(Brands $brand): void
    {
        $this->brand = $brand;
    }

    public function getCategory(): Categories
    {
        return $this->category;
    }

    public function setCategory(Categories $category): void
    {
        $this->category = $category;
    }

}