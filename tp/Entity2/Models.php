<?php

include_once "../Entity2/Brands-ex.php";
include_once "../Entity2/Categories.php";
include_once "../Traits/idTrait.php";

class Models
{

    use idTrait;

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


