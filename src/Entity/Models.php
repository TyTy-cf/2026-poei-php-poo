<?php

include_once "./Entity/Brands.php";

class Models
{

    private ?int $id;

    /**
     * FK "brand_id" en BDD, alors attribut du type de la table en relation, ici Brands
     */
    private Brands $brand;

}