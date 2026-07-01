<?php

include_once "../Entity/CentraleIsh/Brands.php";
include_once "AbstractRepository.php";

class BrandsRepository extends AbstractRepository
{

    public function __construct()
    {
        parent::__construct("db_auto-vente");
    }

    protected function createObjectByAssocArray(array $array): object
    {
        $brand = new Brands();
        $brand->setId($array['id']);
        $brand->setLabel($array['label']);
        $brand->setDescription($array['description']);
        return $brand;
    }
}