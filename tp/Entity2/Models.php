<?php

include_once "Brands-ex.php";
include_once "Categories.php";

class Models
{

    use IdTrait;

    private Brands $brand;

    private Categories $category;


    public function getBrand() : Brands
    {
        return $this->brand;
    }

    public function setBrand(Brands $brand): void
    {
        $this->brand = $brand;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category): void
    {
        $this->category = $category;
    }


}


