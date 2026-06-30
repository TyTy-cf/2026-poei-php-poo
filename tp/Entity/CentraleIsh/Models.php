<?php

namespace CentraleIsh;

use CentraleIsh\Traits\TraitBasicsLabeled;

include_once "Traits/TraitBasicsLabeled.php";

class Models
{
    use TraitBasicsLabeled;
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