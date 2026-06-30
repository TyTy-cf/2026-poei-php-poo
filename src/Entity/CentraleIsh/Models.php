<?php

class Models
{

    private int $id;

    private string $label;

    private string $description;

    /**
     * FK "brand_id" en BDD, alors attribut du type de la table en relation, ici Brands
     */
    private Brands $brand;

    private Categories $category;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

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