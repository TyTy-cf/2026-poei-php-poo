<?php

class Circle extends AbstractForm
{
    private float $radius;

    public function getRadius(): float
    {
        return $this->radius;
    }

    public function setRadius(float $radius): void
    {
        $this->radius = $radius;
    }


    public function getArea(): float
    {
        return pi() * pow($this->radius, 2);
    }
}