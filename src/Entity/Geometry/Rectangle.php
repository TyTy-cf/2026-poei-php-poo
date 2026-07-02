<?php

class Rectangle extends AbstractForm
{

    protected float $width;
    protected float $height;

    /**
     * @param float $width
     * @param float $height
     */
    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea(): float
    {
        return round($this->height * $this->width, 2);
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

}