<?php

namespace Geometry\Class;

class Circle extends AbstractShape
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
        return pi() * ($this->radius**2);
    }
}