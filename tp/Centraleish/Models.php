<?php

include_once "./Traits/Common.php";
include_once "./Traits/Car.php";

class Models
{

    use Common;
    use Car;

    private Brands $brand;

    private Categories $category;

    // Getters

    public function getBrand(): ?Brands {
        return $this->brand;
    }

    public function getCategories(): ?Categories {
        return $this->category;
    }

    // Setters

    public function setBrand(Brands $brand): void {
        $this->brand = $brand;
    }

    public function setCategory(Categories $category): void {
        $this->category = $category;
    }

}

?>