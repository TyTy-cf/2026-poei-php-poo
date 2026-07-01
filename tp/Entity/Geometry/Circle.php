<?php

class Circle extends AbstractForm
{


    protected int $radius;

    public function __construct(int $radius)
    {
        $this->radius = $radius;
    }

    public function getArea(): float
    {

        return pi() * $this->radius * $this->radius;

    }

}