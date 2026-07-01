<?php

class Rectangle extends AbstractForm
{
    protected int $width;
    protected int $height;

    public function __construct(int $valueWidth, int $valueHeight)
    {
        $this->width = $valueWidth;
        $this->height = $valueHeight;
    }

    public function getArea(): float
    {
        return $this->width * $this->height;
    }
}