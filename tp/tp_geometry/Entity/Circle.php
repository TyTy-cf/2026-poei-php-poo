<?php

class Circle extends AbstractForm
{
    private float $radius;

    public function __construct(float $radius){
        $this->radius = $radius;
    }

    public function getArea(): string
    {
        return "L'aire d'un cercle de rayon ". $this->radius. " est de " . pi() * pow($this->radius, 2);
    }
}