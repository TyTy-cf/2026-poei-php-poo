<?php

class Product
{
private string $brand;

private string $model;

private string $color;

private float $price;

private bool $isInStock;

private int $capacity;

private Cate $cate;

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function isInStock(): bool
    {
        return $this->isInStock;
    }

    public function setIsInStock(bool $isInStock): void
    {
        $this->isInStock = $isInStock;
    }

    public function getCapacity(): int
    {
        return $this->capacity;
    }

    public function setCapacity(int $capacity): void
    {
        $this->capacity = $capacity;
    }

    public function getCate(): Cate
    {
        return $this->cate;
    }

    public function setCate(Cate $cate): void
    {
        $this->cate = $cate;
    }


}

