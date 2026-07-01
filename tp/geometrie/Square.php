<?php

namespace geometrie;

class Square extends AbstractForm
{
    private float $width;

    public function __construct($width)
    {
        $this->width = $width;
    }

    public function getWidth():float{
        return $this->width;
    }

    public function getArea(): float
    {
        return $this->width * $this->width;
    }
}