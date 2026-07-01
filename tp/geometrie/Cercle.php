<?php

class Cercle extends AbstractForm
{
protected int $beam;

public function __construct(int $value){
    $this->beam = $value;
}

public function getArea(): float
{
    return pi() * $this->beam * $this->beam;
}

}