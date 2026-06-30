<?php

class Products
{

    private int $id;

    private string $label;

    private string $description;

    private float $price;

    private string $marque

    private Categoriez $categoriee;
public function getMarque(): string
{
    return $this->marque;
}
public function setMarque(string $marque): void
{
    $this->marque = $marque;
}

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
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

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }


    public function getCategoriee() :   Categoriez
    {
        return $this->categoriee;
    }

    public function setCategoriee(Categoriez $categoriee)
    {
        $this->categoriee = $categoriee;
    }

}