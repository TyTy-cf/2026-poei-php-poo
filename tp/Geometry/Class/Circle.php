<?php

namespace Geometry\Class;
include_once __DIR__ . '/AbstractShape.php';

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