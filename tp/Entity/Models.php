<?php


class Models
{

    private int $id;

    private string $label;

    private string $description;

    private Brands $brand;

    private Categories $category;

    public function getId() : int
    {
        return $this->id;
    }

    public function getLabel() : string
    {
        return $this->label;
    }

    public function getDescription() : string
    {
        return $this->description;
    }

    public function getBrand(): Brands
    {
        return $this->brand;
    }

    public function getCategory(): Categories
    {
        return $this->category;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setLabel($label)
    {
        $this->label = $label;
    }

    public function setDescription($description)
    {
        $this->description = $description;
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

