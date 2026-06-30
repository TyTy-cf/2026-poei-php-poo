<?php

include_once "../tp/Entity/Traits/IdLabelDescriptionTrait.php";

class Models
{
    use IdLabelDescriptionTrait;


    private Brands $brand;

    private Categories $category;




    public function getBrand(): Brands
    {
        return $this->brand;
    }

    public function getCategory(): Categories
    {
        return $this->category;
    }



    public function setBrand(Brands $brand)
    {
        $this->brand = $brand;
    }

    public function setCategory(Categories $category)
    {
        $this->category = $category;
    }


}

