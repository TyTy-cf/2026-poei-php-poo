<?php

include_once "Traits/EntityTrait.php";

class Characteristic
{

    use EntityTrait;

    private string $value;

    private Product $product;

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    public function getProduct(): Product
    {
        return $this->product;
    }

    public function setProduct(Product $product): void
    {
        $this->product = $product;
    }

}