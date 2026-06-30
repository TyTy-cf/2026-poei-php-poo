<?php
include_once 'Categories.php';
include_once "Traits/EntityTrait.php";

class Products
{
    use EntityTrait;

    private Categories $category;


    public function getCategory(): Categories
    {
        return $this->category;
    }

    public function setCategory(Categories $category): void
    {
        $this->category = $category;
    }

}