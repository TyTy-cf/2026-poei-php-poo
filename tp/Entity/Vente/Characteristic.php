<?php

namespace Vente;

use Vente\Traits\TraitEntity;

include_once "Traits/TraitEntity.php";


class Characteristic
{
    use TraitEntity;
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
        $product->addCharacteristic($this);
    }
}