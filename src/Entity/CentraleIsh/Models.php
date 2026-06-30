<?php

include_once "./Traits/TraitBaseInfos.php";

class Models
{
    use TraitBase;

    /**
     * FK "brand_id" en BDD, alors attribut du type de la table en relation, ici Brands
     */
    private Brands $brand;

    private Categories $category;


    public function getBrand(): Brands
    {
        return $this->brand;
    }

    public function setBrand(Brands $brand)
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