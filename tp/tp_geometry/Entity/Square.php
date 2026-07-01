<?php

class Square extends AbstractForm
{
    private float $width;

    public function __construct(float $width)
    {
        $this->width = $width;
    }

    public function getArea(): string
    {
        return "L'aire d'un carré avec des côtés de ".$this->width." est de ".pow($this->width, 2);
    }
}