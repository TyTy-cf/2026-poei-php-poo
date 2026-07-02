<?php

include_once "../Entity/CentraleIsh/Brands.php";
include_once "AbstractRepository2.php";

class CategoriesRepository extends AbstractRepository
{

    public function __construct()
    {
        parent::__construct("db_auto-vente", "categories");
    }

    protected function createObjectByAssocArray(array $array): object
    {
        $brand = new Categories();
        $brand->setId($array['id']);
        $brand->setLabel($array['label']);
        $brand->setDescription($array['description']);
        return $brand;
    }
}