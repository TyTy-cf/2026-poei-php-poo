<?php
include_once "TraitId.php";
include_once "TraitLabelDescription.php";

class Models
{
    use TraitId, TraitLabelDescription;
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