<?php

class Rectangle extends AbstractForm
{
    protected float $width;

    protected float $height;

    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea(): string
    {
        return "L'aire d'un rectangle de longueur ".$this->width." et de hauteur ".$this->height." est de ".$this->width * $this->height;
    }
}