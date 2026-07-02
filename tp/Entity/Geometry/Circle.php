<?php

class Circle extends AbstractForm
{

    protected float $radius;

    /**
     * @param float $radius
     */
    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function getArea(): float
    {
        return round(pi() * (pow($this->radius, 2)), 2);
    }

    public function getRadius(): float
    {
        return $this->radius;
    }

}